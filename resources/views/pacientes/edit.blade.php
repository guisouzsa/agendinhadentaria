@extends('master')

@section('title', 'Editar Paciente')

@section('content')
    <h1>Editar Paciente</h1>

    <form action="{{ route('pacientes.update', $paciente->id) }}" method="POST" class="mb-5">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nomePaciente" class="form-label">Nome:</label>
            <input type="text" id="nomePaciente" name="nomePaciente" value="{{ $paciente->nomePaciente }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">Data:</label>
            <input type="date" id="data" name="data" value="{{ $paciente->data }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="hora" class="form-label">Hora:</label>
            <input type="time" id="hora" name="hora" value="{{ $paciente->hora }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="procedimento" class="form-label">Procedimento:</label>
            <input type="text" id="procedimento" name="procedimento" value="{{ $paciente->procedimento }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <input type="text" id="status" name="status" value="{{ $paciente->status }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" value="{{ $paciente->email }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

    <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
