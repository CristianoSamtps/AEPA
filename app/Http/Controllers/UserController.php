<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\FotografiaProjeto;
use App\Models\Member_Doner;
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

    public function editperfil(User $user)
    {
        return view('editperfil', compact('user'));
    }

    public function indexperfil(User $user)
    {
        $projetos = $user->projetos;
        $doacoes = $user->doacoes;
        $fotografias = FotografiaProjeto::where('destaque', true)->get();

        return view('indexperfil', compact('user', 'doacoes', 'projetos','fotografias'));
    }

    public function projetosperfil(User $user)
    {
        // Usando a relação definida no modelo User para acessar os projetos através da tabela de pivot 'voluntariado'
        $projetos = $user->projetos;
        $fotografias = FotografiaProjeto::where('destaque', true)->get();

        return view('projetosperfil', compact('user', 'projetos','fotografias'));
    }

    public function donationsperfil(User $user)
    {
        $doacoes = $user->doacoes;
        return view('donationsperfil', compact('user', 'doacoes'));
    }

    public function updateperfil(UserRequest $request, User $user)
    {
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

        if ($user->tipo == 'M') {
            $membro = Member_Doner::findOrFail($user->id);
            $membro->fill($fields);
            $membro->save();
        }

        return redirect()->route('editperfil', $user)
            ->with('success', 'Utilizador atualizado com sucesso');
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $fields = $request->validated();
        $user->fill($fields);
        if ($request->hasFile('foto')) {
            if (!empty($user->foto)) {
                Storage::disk('public')->delete('user_fotos/' .
                    $user->foto);
            }
            $foto_path =
                $request->file('foto')->store('public/user_fotos');
            $user->foto = basename($foto_path);
        }

        $user->save();

        return redirect()->route('admin.users.index')
            ->with('success', 'Utilizador atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
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
}
