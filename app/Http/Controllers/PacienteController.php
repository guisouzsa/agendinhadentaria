<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
       $pacientes = Paciente::all();
       return view("pacientes.index", compact("pacientes"));
    }

    public function create()
    {
       return view("pacientes.create");
    }

    public function store(Request $request)
    {
        // Validação básica
        $request->validate([
            'nomePaciente' => 'required|string|max:255',
            'data' => 'required|date',
            'hora' => 'required',
            'procedimento' => 'required|string|max:255',
            'status' => 'required|string|max:50',
            'email' => 'nullable|email|max:255',
        ]);

        Paciente::create($request->all());

        return redirect()->route("pacientes.index");
    }

    public function show(Paciente $paciente)
    {
        return view('pacientes.show', compact('paciente'));
    }

    public function edit(Paciente $paciente)
    {
        return view('pacientes.edit', compact('paciente'));
    }

    public function update(Request $request, Paciente $paciente)
    {
        // Validação básica
        $request->validate([
            'nomePaciente' => 'required|string|max:255',
            'data' => 'required|date',
            'hora' => 'required',
            'procedimento' => 'required|string|max:255',
            'status' => 'required|string|max:50',
            'email' => 'nullable|email|max:255',
        ]);

        $paciente->update($request->all());

        return redirect()->route('pacientes.index');
    }

    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return redirect()->route('pacientes.index');
    }
}
