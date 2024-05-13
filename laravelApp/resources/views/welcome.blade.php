<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Pacientes</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Gestión de Pacientes</h1>
    <div class="d-flex justify-content-around">
        <a href="{{ route('patients.index') }}" class="btn btn-primary">Ver Pacientes</a>
        <a href="{{ route('patients.create') }}" class="btn btn-success">Crear Nuevo Paciente</a>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
