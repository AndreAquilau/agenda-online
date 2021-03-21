<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\User;

class AgendaController extends Controller
{
    public function index()
    {
        $agendamentos = Agenda::where('confirmado', 0)->orderBy('id', 'asc')->paginate(10);
        $usuario = User::find(1);

        //dd($agendamentos);
        return view('admin/dashboard', ['agendamentos'=> $agendamentos, 'usuario' => $usuario]);
    }

    public function edit($id)
    {
        $agendamentos = Agenda::where('confirmado', 0)->orderBy('id', 'asc')->paginate(10);
        $usuario = User::find(1);
        $agenda = Agenda::find($id);

        //dd($agendamentos);
        return view('admin/editdashboard', ['agendamentos'=> $agendamentos, 'usuario' => $usuario, 'agenda' => $agenda]);
    }

    public function store(Request $request) {
        //dd($request->all());
        Agenda::create([
            'evento' => $request->evento,
            'data' => $request->data,
            'hora' => $request->hora,
            'categoria' => $request->categoria,
            'descricao' => $request->descricao,
            'confirmado' => false,
        ]);

        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        $agenda = Agenda::find($id);
        $agenda->delete();

        return redirect()->route('dashboard');
    }

    public function updateConfirm($id)
    {
        $agenda = Agenda::find($id);
        $agenda->confirmado = true;
        $agenda->save();

        return redirect()->route('dashboard');
    }

    public function updateAgenda(Request $request, $id)
    {
        $agenda = Agenda::find($id);
        $agenda->evento = $request->get('evento');
        $agenda->categoria = $request->get('categoria');
        $agenda->descricao = $request->get('descricao');
        $agenda->data = $request->get('data');
        $agenda->hora = $request->get('hora');
        $agenda->confirmado = false;
        $agenda->save();

        return redirect()->route('dashboard');
    }
}



