<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-100 via-sky-50 to-white text-slate-900">
    <div class="mx-auto max-w-5xl px-4 py-8 sm:px-6 lg:px-8">
        <header class="flex flex-col gap-6 rounded-3xl border border-slate-200 bg-white/80 p-6 shadow-xl shadow-slate-200/60 backdrop-blur-md sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-3xl font-semibold tracking-tight text-slate-900">Agenda de Contactos</h1>
            </div>
            <nav class="flex flex-wrap gap-3">
                <a href="{{ route('contacts.index') }}" class="rounded-full bg-sky-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition hover:bg-sky-500">
                    Contactos
                </a>
                <a href="{{ route('contacts.create') }}" class="rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-700 shadow-sm transition hover:border-slate-300 hover:bg-slate-50">
                    Añadir Contacto
                </a>
            </nav>
        </header>
        <main class="mt-8 rounded-3xl border border-slate-200 bg-white/90 p-6 shadow-lg shadow-slate-200/40">
            @yield('content')
        </main>
    </div>
</body>
</html>