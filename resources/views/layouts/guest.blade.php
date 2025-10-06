<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Autenticação') - Agenda Odontológica</title>

    <style>
        :root {
            --primary: #1a73e8;       /* azul principal */
            --primary-dark: #1558b0;  /* azul mais escuro para hover */
            --dark: #0f172a;
            --light: #f8fafc;
            --muted: #64748b;
            --radius: 10px;
        }

        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: var(--light);
            font-family: 'Inter', 'Segoe UI', Tahoma, sans-serif;
            color: var(--dark);
        }

        /* Navbar */
        nav {
            background: var(--dark);
            padding: 1rem 2rem;
            display: flex;
            justify-content: center;
        }

        nav .brand {
            font-weight: 700;
            font-size: 1.3rem;
            color: #fff;
            text-decoration: none;
        }

        /* Container principal */
        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        /* Card centralizado */
        .card {
            background: #fff;
            border-radius: var(--radius);
            padding: 2rem;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            transition: transform .2s, box-shadow .2s;
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }

        /* Títulos */
        h1, h2 {
            margin-bottom: 1.5rem;
            font-weight: 700;
            text-align: center;
            color: var(--dark);
        }

        /* Form */
        .form-group {
            margin-bottom: 1.2rem;
        }

        label {
            display: block;
            font-size: .9rem;
            margin-bottom: .3rem;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: .75rem;
            border: 1px solid #cbd5e1;
            border-radius: var(--radius);
            font-size: 1rem;
            transition: border .2s, box-shadow .2s;
        }

        input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 6px rgba(26,115,232,0.4);
            outline: none;
        }

        /* Botões */
        .btn {
            display: block;
            width: 100%;
            padding: 0.85rem 1rem;
            border-radius: var(--radius);
            border: none;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-top: 1rem;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        /* Botão principal (login, registrar, submit) */
        .btn-primary {
            background: var(--primary);
            color: #fff;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        /* Botão secundário opcional */
        .btn-secondary {
            background: #fff;
            border: 1px solid var(--primary);
            color: var(--primary);
        }

        .btn-secondary:hover {
            background: var(--primary);
            color: #fff;
            transform: translateY(-2px);
        }

        /* Links auxiliares (esqueci senha, criar conta) */
        .link {
            display: block;
            text-align: center;
            font-size: .9rem;
            margin-top: 0.8rem;
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: color .2s, transform .2s;
        }

        .link:hover {
            color: var(--primary-dark);
            transform: translateY(-1px);
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 1rem;
            color: var(--muted);
            font-size: .9rem;
        }

        footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <a href="{{ url('/') }}" class="brand">🦷 Agenda Odontológica</a>
    </nav>

    <!-- Conteúdo -->
    <main>
        <div class="card">
            {{ $slot }}
        </div>
    </main>

    <!-- Rodapé -->
    <footer>
        &copy; {{ date('Y') }} Clínica Odontológica
    </footer>
</body>
</html>
