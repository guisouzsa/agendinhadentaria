<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paciente</title>
</head>
<body>
    <h1>Editar Paciente</h1>

    <form action="{{ route('pacientes.update', $paciente->id) }}" method="POST">
        @csrf
        @method('PUT')

        Nome:<br>
        <input type="text" name="nomePaciente" value="{{ $paciente->nomePaciente }}"><br><br>

        Data:<br>
        <input type="date" name="data" value="{{ $paciente->data }}"><br><br>

        Hora:<br>
        <input type="time" name="hora" value="{{ $paciente->hora }}"><br><br>

        Procedimento:<br>
        <input type="text" name="procedimento" value="{{ $paciente->procedimento }}"><br><br>

        Status:<br>
        <input type="text" name="status" value="{{ $paciente->status }}"><br><br>

        Email:<br>
        <input type="email" name="email" value="{{ $paciente->email }}"><br><br>

        <button type="submit">Salvar</button>
    </form>

    <br>
    <a href="{{ route('pacientes.index') }}">Voltar</a>
</body>
</html>
