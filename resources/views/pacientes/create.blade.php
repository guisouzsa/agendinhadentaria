@extends('master')

@section('title', 'Cadastrar Paciente')

@section('content')
    <h1>Cadastrar Paciente</h1>

    <form action="{{ route('pacientes.store') }}" method="POST" class="mb-5">
        @csrf

        <div class="mb-3">
            <label for="nomePaciente" class="form-label">Nome:</label>
            <input type="text" id="nomePaciente" name="nomePaciente" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">Data:</label>
            <input type="date" id="data" name="data" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="hora" class="form-label">Hora:</label>
            <input type="time" id="hora" name="hora" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="procedimento" class="form-label">Procedimento:</label>
            <input type="text" id="procedimento" name="procedimento" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <input type="text" id="status" name="status" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
