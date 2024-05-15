
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
            <h1 class="font-bold text-5xl text-center mb-8">Edición de Doctor</h1>

            <div class="mb-6">
                <form class="flex flex-col space-y-4" action="/dcupd/{{$doctor->id}}" method="POST" >
                    @csrf
                    @method('PATCH')
                    <input type="text" name="name" placeholder="Name" class="py-3 px-4 bg-gray-100 rounded-xl" value="{{$doctor->name}}">
                    <input type="text" name="lastname" placeholder="Lastname" class="py-3 px-4 bg-gray-100 rounded-xl" value="{{$doctor->lastname}}">
                    <input type="text" name="email" placeholder="email" class="py-3 px-4 bg-gray-100 rounded-xl" value="{{$doctor->email}}">
                    <input type="date" id="date" name="birth" min="1900-01-01" value="{{$doctor->birth}}">
                    <input type="text" name="phone" placeholder="Phone numer" class="py-3 px-4 bg-gray-100 rounded-xl" value="{{$doctor->phone}}">
                    <select name="speciality">
                        <option value="Cardiología" selected>Cardiología</option>
                        <option value="Dermatología">Dermatología</option>
                        <option value="Gastroenterología">Gastroenterología</option>
                        <option value="General">General</option>
                        <option value="Pediatría">Pediatría</option>
                    </select>
                    <input type="number" name="license" placeholder="Licencia médica" class="py-3 px-4 bg-gray-100 rounded-xl" value="{{$doctor->license}}">
                    <button class="w-150 py-4 px-8 text-center bg-green-500 text-white rounded-xl" type="submit">Guardar</button>
                <br>
        </form>
        <footer class="bg-white mt-8 py-4 text-center">
            <p>LIS104 2024 Derechos Reservados</p>
            <p><a href="mailto:info@clinica.com">info@clinica.com</a></p>
            <p>5555-5555</p>
        </footer>
    </body>
</html>
