<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Paciente</title>
</head>
<body>
    <h1>Detalhes do Paciente</h1>

    Nome: {{ $paciente->nomePaciente }}<br>
    Data: {{ $paciente->data }}<br>
    Hora: {{ $paciente->hora }}<br>
    Procedimento: {{ $paciente->procedimento }}<br>
    Status: {{ $paciente->status }}<br>
    Email: {{ $paciente->email }}<br><br>

    <a href="{{ route('pacientes.edit', $paciente->id) }}">Editar</a> |
    <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form> |
    <a href="{{ route('pacientes.index') }}">Voltar</a>
</body>
</html>
