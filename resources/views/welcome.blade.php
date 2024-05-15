<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clinica Don Bosco</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-200 p-4">
        <header class="flex justify-between items-center py-4 bg-white shadow-md">
            <a href="{{ url('/') }}" class="flex items-center text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <span class="ml-2 font-bold">Inicio</span>
            </a>
        </header>
        <hr><hr><hr><hr><hr><hr>
        <div class="lg:w-2/4 mx-auto py-8 px-6 bg-white rounded-xl">
            <h1 class="font-bold text-5xl text-center mb-8">Clinica Don Bosco</h1>
            <div class="mb-6">
                <div class="flex flex-col space-y-4">
                <a class="w-150 py-4 px-8 bg-red-300 text-center text-white rounded-xl " href="{{ route('patients.index') }}">Administración de Pacientes</a>                
                <br>
                <a class="w-150 py-4 px-8 bg-red-300 text-center text-white rounded-xl " href="{{ route('doctors.index') }}">Administración de Doctores</a>                
                <br>
                <a class="w-150 py-4 px-8 bg-red-300 text-center text-white rounded-xl " href="{{ route('dates.index') }}">Administración de Citas médicas</a>                
                <br>
                </div>
                <hr>
            </div>
        </div>
        <footer class="bg-white mt-8 py-4 text-center">
            <p>LIS104 2024 Derechos Reservados</p>
            <p><a href="mailto:info@clinica.com">info@clinica.com</a></p>
            <p>5555-5555</p>
        </footer>
    </body>
</html>
