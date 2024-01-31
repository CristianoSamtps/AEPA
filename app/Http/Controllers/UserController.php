<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\FotografiaProjeto;
use App\Models\PhotoEvent;
use App\Models\Member_Doner;
use App\Models\Participant;
use Illuminate\Http\Request;
use App\Models\Donation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (count($request->all()) == 0) {
            $users = User::all();
        } else {
            $users = User::query();
            if ($request->filled('name')) {
                $users->where('name', 'like', '%' . $request->name . '%');
            }
            if ($request->filled('email')) {
                $users->where('email', 'like', '%' . $request->email . '%');
            }
            if ($request->filled('tipo')) {
                $users->where('tipo', $request->tipo);
            }
            $users = $users->get();
        }
        return view('_admin.users.index', compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = new User();
        return view('_admin.users.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $fields = $request->validated();
        /*$user =User::create($fields); */
        $user = new User();
        $user->fill($fields);
        $user->password = Hash::make('password');
        if ($request->hasFile('foto')) {
            $foto_path = $request->file('foto')->store(
                'public/user_fotos'
            );
            $user->foto = basename($foto_path);
        }
        $user->tipo = 'A';
        $user->save();

        /**$user->sendEmailVerificationNotification();*/
        return redirect()->route('admin.users.index')
            ->with('success', 'Utilizador criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('_admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('_admin.users.edit', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     */

    public function update(UserRequest $request, User $user)
    {
        $fields = $request->validated();

        if (!empty($fields['password'])) {
            $fields['password'] = Hash::make($fields['password']);
        } else {
            unset($fields['password']);
        }

        $user->fill($fields);

        if ($request->hasFile('foto')) {
        }

        $user->save();

        return redirect()->route('admin.users.index')
            ->with('success', 'Utilizador atualizado com sucesso');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with(
            'success',
            'Utilizador eliminado com sucesso'
        );
    }
    public function destroy_foto(User $user)
    {
        Storage::disk('public')->delete('user_fotos/' . $user->foto);
        $user->foto = null;
        $user->save();
        return redirect()->route('admin.users.edit', $user)->with(
            'success',
            'A foto do utilizador foi apagada com sucesso.'
        );
    }
    public function send_reactivate_email(User $user)
    {
        $user->sendEmailVerificationNotification();
        return redirect()->route('admin.users.edit', $user)->with(
            'success',
            'O email foi enviado com sucesso para o utilizador'
        );
    }

    // TUDO O QUE TEM HAVER COM O PERFIL FRONT OFFICE


    public function editperfil(User $user)
    {
        return view('editperfil', compact('user'));
    }

    public function indexperfil(User $user)
    {
        $projetos = $user->projetos;
        $doacoes = $user->doacoes;
        $fotografias = FotografiaProjeto::where('destaque', true)->get();

        return view('indexperfil', compact('user', 'doacoes', 'projetos', 'fotografias'));
    }


    public function atualizarMetodoPagamento(Request $request)
    {

        $userId = $request->input('user_id');
        $metodoPag = $request->input('metodo_pag');

        User::where('id', $userId)->update(['metodo_pag' => $metodoPag]);

        return response()->json(['success' => true]);
    }

    public function showPerfil(User $user)
    {
        // Obtém os projetos associados ao utilizador
        $projetos = $user->projetos;

        // Obtém os eventos associados ao utilizador
        $events = $user->events;

        // Obtém as fotografias dos projetos que são marcadas como destaque
        $fotografias = FotografiaProjeto::where('destaque', true)->get();

        // Obtém todas as fotos dos eventos
        $photos_events = PhotoEvent::all();

        // Retorna a view 'projetosperfil' passando as variáveis necessárias
        return view('projetosperfil', compact('user', 'projetos', 'events', 'fotografias', 'photos_events'));
    }


    public function deleteregperfil(User $user, $event)
    {
        // Define o participante associado ao utilizador e ao evento 
        $participant = $user->participant()->where('event_id', $event)->first();

        // Deleta o participante
        $participant->delete();

        // Redireciona de volta para a rota 'projetosperfil'
        return redirect()->route('projetosperfil', ['user' => $user])
            ->with('success', 'Participante removido com sucesso do evento ID: ' . $event);
    }


    public function donationsperfil(User $user)
    {
        $doacoes = $user->doacoes;
        return view('donationsperfil', compact('user', 'doacoes'));
    }

    public function updateperfil(UserRequest $request, User $user)
    {

        // Valida todos os campos do formulario enviado
        $fields = $request->validated();
        $user->fill($fields);

        if ($request->hasFile('foto')) {
            // Verifica se já existe uma foto e exclui a anterior
            if (!empty($user->foto)) {
                Storage::disk('public')->delete('user_fotos/' . $user->foto);
            }

            // Salva a nova foto
            $foto_path = $request->file('foto')->store('public/user_fotos');
            $user->foto = basename($foto_path);
        }

        $user->save();

        return redirect()->route('editperfil', $user)
            ->with('success', 'Utilizador atualizado com sucesso');
    }


    public function updatePassword(Request $request, User $user)
    {
        // Validação dos campos 
        $request->validate([
            'old_password' => ['required', function ($attribute, $value, $fail) use ($user) {
                if (!Hash::check($value, $user->password)) {
                    return $fail('A senha atual está incorreta.');
                }
            }],

            // Campo 'new_password' deve ser obrigatório e ter no mínimo 8 caracteres
            'new_password' => 'required|min:4',

            // Campo 'new_password_confirmation' deve ser obrigatório e igual ao campo 'new_password'
            'new_password_confirmation' => 'required|same:new_password',
        ], [
            // Mensagem personalizada caso que 'new_password_confirmation' não é igual a 'new_password'
            'new_password_confirmation.same' => 'As senhas não coincidem.',
        ]);

        // Atualiza a password do user com a nova password fornecida no Request
        $user->password = Hash::make($request->new_password);

        // Salva as alterações na base de dados
        $user->save();

        return redirect()->route('editperfil', $user)
            ->with('success', 'Senha atualizada com sucesso.');
    }
}
