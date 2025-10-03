@extends('master')

@section('title', 'Detalhes do Paciente')

@section('content')
    <h1>Detalhes do Paciente</h1>

    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Nome:</strong> {{ $paciente->nomePaciente }}</li>
        <li class="list-group-item"><strong>Data:</strong> {{ $paciente->data }}</li>
        <li class="list-group-item"><strong>Hora:</strong> {{ $paciente->hora }}</li>
        <li class="list-group-item"><strong>Procedimento:</strong> {{ $paciente->procedimento }}</li>
        <li class="list-group-item"><strong>Status:</strong> {{ $paciente->status }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $paciente->email }}</li>
    </ul>

    <a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-warning">Editar</a>

    <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" onclick="return confirm('Deseja deletar este paciente?')">Deletar</button>
    </form>

    <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
