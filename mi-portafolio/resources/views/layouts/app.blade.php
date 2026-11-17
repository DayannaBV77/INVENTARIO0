<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <style>
        body { font-family: system-ui, sans-serif; margin: 0; padding: 20px; background-color: #f8fafc; color: #1e293b; }
        header { background: #0f172a; color: white; padding: 15px 20px; border-radius: 8px; margin-bottom: 20px; }
        nav { display: flex; gap: 15px; margin-top: 10px; }
        nav a { color: #94a3b8; text-decoration: none; font-weight: 500; }
        nav a:hover { color: #38bdf8; }
        nav a.nav-active { color: #38bdf8; font-weight: bold; border-bottom: 2px solid #38bdf8; }
        main { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        footer { margin-top: 30px; text-align: center; color: #64748b; font-size: 0.9em; }
        .card { border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #fff; box-shadow: 0 1px 2px rgba(0,0,0,0.05); }
        .card-header { font-size: 1.25rem; font-weight: bold; margin-bottom: 10px; border-bottom: 1px solid #f1f5f9; padding-bottom: 8px; }
        .alert-success { background-color: #dcfce7; border: 1px solid #86efac; color: #166534; padding: 12px; border-radius: 6px; margin-bottom: 15px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { text-align: left; padding: 10px 12px; border-bottom: 1px solid #e2e8f0; }
        th { background: #f1f5f9; }
        .btn { display: inline-block; padding: 6px 12px; background: #2563eb; color: white; text-decoration: none; border-radius: 4px; font-size: 0.9em; }
        .badge-danger { background-color: #fee2e2; color: #991b1b; padding: 3px 8px; border-radius: 4px; font-weight: 600; font-size: 0.85em; }
        .badge-success { background-color: #dcfce7; color: #166534; padding: 3px 8px; border-radius: 4px; font-weight: 600; font-size: 0.85em; }
    </style>
</head>
<body>
    <header>
        <h1 style="margin: 0; font-size: 1.5rem;">{{ config('app.name') }}</h1>
        <nav>
            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'nav-active' : '' }}">Inicio</a>
            <a href="{{ route('estudiantes.index') }}" class="{{ request()->routeIs('estudiantes.*') ? 'nav-active' : '' }}">Estudiantes</a>
            <a href="{{ route('productos.index') }}" class="{{ request()->routeIs('productos.*') ? 'nav-active' : '' }}">Productos</a>
            <a href="{{ route('acerca') }}" class="{{ request()->routeIs('acerca') ? 'nav-active' : '' }}">Acerca de</a>
        </nav>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} - {{ config('app.name') }} | Ficha: {{ config('curso.ficha') }}</p>
    </footer>
</body>
</html>
