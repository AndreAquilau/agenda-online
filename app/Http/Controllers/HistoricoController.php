<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;
use App\Models\User;

class HistoricoController extends Controller
{
    public function index()
    {
        $agendamentos = Agenda::where('confirmado', 1)->orderBy('id', 'asc')->paginate(10);
        $usuario = User::find(1);

        //dd($agendamentos);
        return view('admin/historico', ['agendamentos'=> $agendamentos, 'usuario' => $usuario]);
    }
}
