<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
</head>
<body>
    <h1>Meus Pacientes</h1>

    <a href="{{ route('pacientes.create') }}">Cadastrar Novo Paciente</a><br><br>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
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
                    <a href="{{ route('pacientes.edit', $paciente->id) }}">Editar</a> |
                    <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Tem certeza que deseja deletar este paciente?')">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
