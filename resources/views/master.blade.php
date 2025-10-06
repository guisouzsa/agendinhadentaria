<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Pacientes - @yield('title')</title>

    <style>
        :root {
            --primary: #1a73e8;
            --primary-dark: #1558b0;
            --dark: #0f172a;
            --light: #f8fafc;
            --muted: #64748b;
            --radius: 10px;
        }

        body {
            margin: 0;
            padding: 0;
            background: var(--light);
            font-family: 'Inter', 'Segoe UI', Tahoma, sans-serif;
            color: var(--dark);
            line-height: 1.6;
        }

        /* Navbar */
        nav {
            background: var(--dark);
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        nav .brand {
            font-weight: 700;
            font-size: 1.2rem;
            color: #fff;
            text-decoration: none;
        }

        nav ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 1.5rem;
        }

        nav ul li a {
            color: #fff;
            font-weight: 500;
            text-decoration: none;
            transition: color .2s;
        }

        nav ul li a:hover {
            color: var(--primary);
        }

        /* Container */
        main {
            max-width: 960px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        /* Botões */
        .btn {
            display: inline-block;
            padding: .6rem 1.2rem;
            border-radius: var(--radius);
            font-weight: 500;
            text-decoration: none;
            cursor: pointer;
            transition: background .2s, transform .1s;
        }

        .btn-primary {
            background: var(--primary);
            color: #fff;
            border: none;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        /* Títulos */
        h1, h2, h3 {
            margin: 1rem 0;
            font-weight: 700;
            color: var(--dark);
        }

        /* Tabelas */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.5rem;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }

        table thead {
            background: var(--dark);
            color: #fff;
        }

        table th, table td {
            padding: .75rem 1rem;
            text-align: left;
        }

        table tbody tr:nth-child(even) {
            background: #f1f5f9;
        }

        table tbody tr:hover {
            background: #e9efff;
        }

        /* Formulários */
        input, select, textarea {
            width: 100%;
            padding: .6rem .8rem;
            border: 1px solid #cbd5e1;
            border-radius: var(--radius);
            font-size: 1rem;
            margin-bottom: 1rem;
            transition: border .2s, box-shadow .2s;
        }

        input:focus, select:focus, textarea:focus {
            border-color: var(--primary);
            box-shadow: 0 0 4px rgba(26,115,232,0.5);
            outline: none;
        }

        /* Card */
        .card {
            background: #fff;
            border-radius: var(--radius);
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 1.5rem;
            color: var(--muted);
            font-size: .9rem;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('pacientes.index') }}" class="brand">🦷 Agenda Odontológica</a>
        <ul>
            <li><a href="{{ route('pacientes.index') }}">Pacientes</a></li>
            <li><a href="{{ route('pacientes.create') }}">+ Novo Paciente</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} Clínica Odontológica - Feito com ❤
    </footer>
</body>
</html>
