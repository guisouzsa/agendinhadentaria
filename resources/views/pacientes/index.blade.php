@extends('master')

@section('title', 'Pacientes')

@section('content')
    <h1>Meus Pacientes</h1>

    <a href="{{ route('pacientes.create') }}" class="btn btn-success mb-3">Cadastrar Novo Paciente</a>

    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>Nome</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Procedimento</th>
                <th>Status</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->nomePaciente }}</td>
                <td>{{ $paciente->data }}</td>
                <td>{{ $paciente->hora }}</td>
                <td>{{ $paciente->procedimento }}</td>
                <td>{{ $paciente->status }}</td>
                <td>{{ $paciente->email }}</td>
                <td>
                    <a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Tem certeza que deseja deletar este paciente?')" class="btn btn-danger btn-sm">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
