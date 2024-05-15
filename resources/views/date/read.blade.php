
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
            <h1 class="font-bold text-5xl text-center mb-8">Control de Citas</h1>

            <div class="mb-6">
                <form class="flex flex-col space-y-4" action="/datecr" method="POST" >
                    @csrf
                    <select name="patientid" id="patientid">
                        <option value=""></option>
                    @foreach($patients as $patient)
                        <option value="{{$patient->id}}">{{$patient->lastname}}, {{$patient->name}}, {{$patient->email}}</option>
                    @endforeach
                    </select>
                    <input type="text" name="patientname" id="patientname"  placeholder="Nombre del paciente">
                    <select name="doctorid" id="doctorid">
                    <option value=""></option>
                    @foreach($doctors as $doctor)
                        <option value="{{$doctor->id}}">{{$doctor->speciality}}, {{$doctor->lastname}}, {{$doctor->name}}</option>
                    @endforeach
                    </select>
                    <input type="text" name="doctorname" id="doctorname" placeholder="Nombre del doctor">
                    <input type="date" id="date" name="date" min="1900-01-01"/>
                    <button class="w-150 py-4 px-8 text-center bg-green-500 text-white rounded-xl" type="submit">Agregar</button>
                <br>
          </form>
                <br>
                <hr>
                <div class="mt-2">
                    @foreach($dates as $date)
                        <div 
                            @class(['py-4 flex items-center border-b border-gray-300 px-3', 
                            $date->isDone ? 'bg-green-200':''])
                        >
                            <div class="flex-1 pr-8">
                                <h3 class="text-lg font-semibold" id="data">{{$date->doctorname}}, {{ $date->patientname }}. Fecha: {{$date->date}}</h3>
                            </div>
                            <div class="flex space-x-3">
                                <form method="post" action="/dtupd/{{ $date->id }}">
                                    @csrf    
                                    @method('PATCH')
                                    <button class="py-2 px-2 bg-green-500 text-white rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                    </svg>
                                    </button>
                                </form>
                                <form method="post" action="/dtdel/{{ $date->id }}">
                                    @csrf    
                                    @method('DELETE')
                                    <button class="py-2 px-2 bg-red-500 text-white rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <footer class="bg-white mt-8 py-4 text-center">
            <p>LIS104 2024 Derechos Reservados</p>
            <p><a href="mailto:info@clinica.com">info@clinica.com</a></p>
            <p>5555-5555</p>
        </footer>
        <script>
            window.onload = function(){
            var fecha = new Date(); // obtiene la fecha actual
            var dia = fecha.getDate();
            var mes = fecha.getMonth() + 1; // los meses en JavaScript empiezan desde 0
            var ano = fecha.getFullYear();

            if(dia < 10) dia = '0' + dia; // añade un cero si el día es menor a 10
            if(mes < 10) mes = '0' + mes; // añade un cero si el mes es menor a 10

            var fechaFormateada = ano + "-" + mes + "-" + dia; // formatea la fecha al formato yyyy-mm-dd

            document.getElementById("date").min = fechaFormateada; // establece la fecha máxima
            document.getElementById("date").value = fechaFormateada; // establece la fecha máxima
            }


            document.getElementById("patientid").addEventListener("change", function() {
            var seleccionado = this.options[this.selectedIndex].text.split(',')[1],trim;
            document.getElementById("patientname").value = seleccionado;
            });
            document.getElementById("doctorid").addEventListener("change", function() {
            var seleccionado = this.options[this.selectedIndex].text.split(',');
            var total = seleccionado[2] + " " + seleccionado[0];
            document.getElementById("doctorname").value = total;
            });
        </script>
    </body>
</html>
