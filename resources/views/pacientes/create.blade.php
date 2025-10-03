<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Paciente</title>
</head>
<body>
    <h1>Cadastrar Paciente</h1>

    <form action="{{ route('pacientes.store') }}" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nomePaciente" required><br><br>

        <label>Data:</label>
        <input type="date" name="data" required><br><br>

        <label>Hora:</label>
        <input type="time" name="hora" required><br><br>

        <label>Procedimento:</label>
        <input type="text" name="procedimento" required><br><br>

        <label>Status:</label>
        <input type="text" name="status" required><br><br>

        <label>Email:</label>
        <input type="email" name="email"><br><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
