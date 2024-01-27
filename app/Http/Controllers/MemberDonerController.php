<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member_Doner;

class MemberDonerController extends Controller
{
    public function atualizarMetodoPagamento(Request $request)
    {
        $userId = $request->input('user_id');
        $metodoPag = $request->input('metodo_pag');

        try {
            // Atualize o método de pagamento no banco de dados
            Member_Doner::where('id', $userId)->update(['metodo_pag' => $metodoPag]);

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
