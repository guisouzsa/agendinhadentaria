<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Agenda de Pacientes - @yield('title')</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        
        :root {
            --primary-color: #234679;
            --primary-color-dark: #1b3559;
        }

        body {
            background-color: #f0f4f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        .navbar-custom {
            background-color: var(--primary-color);
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #f8f9fa;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .navbar-custom .nav-link:hover {
            color: #c5d1e0;
        }

        footer {
            font-size: 0.9rem;
            color: #666;
        }

        .btn-primary-custom {
            background-color: var(--primary-color);
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary-custom:hover {
            background-color: var(--primary-color-dark);
        }

        h1, h2 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        table thead {
            background-color: var(--primary-color);
            color: white;
        }

        input.form-control, select.form-control, textarea.form-control {
            border-radius: 0.375rem;
            border: 1px solid #ccc;
            transition: border-color 0.3s ease;
        }

        input.form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 5px var(--primary-color);
        }

        .container {
            max-width: 900px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom mb-5">
        <div class="container">
            <a href="{{ route('pacientes.index') }}" class="navbar-brand">Agenda Odontológica</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{ route('pacientes.index') }}" class="nav-link">Pacientes</a></li>
                <li class="nav-item"><a href="{{ route('pacientes.create') }}" class="nav-link">Novo Paciente</a></li>
            </ul>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer class="text-center mt-5 mb-4">
        &copy; {{ date('Y') }} Clínica Odontológica
    </footer>
</body>
</html>
