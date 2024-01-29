<?php

namespace App\Http\Controllers;

use App\Models\Member_Doner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PlanTable;
use App\Models\PlanType;
use App\Models\MemberDoner;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $planoId = $request->plano_id;
        $userId = auth()->user()->id; // Ou qualquer outro método que você use para obter o ID do usuário autenticado

        // Inicia uma transação
        DB::beginTransaction();
        try {
            // Altera o membro para subscrito
            $memberDoner = Member_Doner::where('user_id', $userId)->first();
            $memberDoner->update(['subscrito' => 'S']);

            // Adiciona o plano ao membro doner
            PlanTable::create([
                'member_doner_id' => $userId,
                'planType_id' => $planoId,
            ]);

            // Se tudo correu bem, confirma as operações
            DB::commit();

            // Redireciona com uma mensagem de sucesso
            return redirect()->route('index')->with('success', 'Pagamento confirmado com sucesso!');
        } catch (\Exception $e) {
            // Se algo deu errado, desfaz as operações
            DB::rollBack();

            // Redireciona com uma mensagem de erro
            return redirect()->route('index')->with('error', 'Erro ao confirmar o pagamento.');
        }
    }

    public function showPaymentForm($id)
    {
        $planoSelecionado = PlanType::find($id);
        $user = auth()->user();

        if (!$user) {
            return redirect()->route('login');
        }

        return view('pagamentoMembro', compact('planoSelecionado', 'user'));
    }


    public function storePayment(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'plano_id' => 'required|exists:plantypes,id',
            // Adicione outras validações necessárias aqui
        ]);

        // Criação de uma nova instância do modelo Plan
        $plano = new PlanTable;
        $plano->planType_id = $validatedData['plano_id'];
        $plano->member_doner_id = auth()->id(); // Exemplo de como pegar o ID do usuário autenticado
        // Atribua outros campos necessários aqui
        $plano->save();

        // Redirecionar ou retornar uma resposta
        return redirect()->route('index')->with('success', 'Pagamento realizado com sucesso!');
    }



}
