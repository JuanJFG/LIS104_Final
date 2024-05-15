
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DateController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('patients', PatientController::class);
Route::post('/patientcr', [PatientController::class, 'create']);
Route::patch('/ptpre/{patient}', [PatientController::class, 'preupdate']);
Route::patch('/ptupd/{patient}', [PatientController::class, 'update']);
Route::delete('/ptdel/{patient}', [PatientController::class, 'destroy']);

Route::resource('doctors', DoctorController::class);
Route::post('/doctorcr', [DoctorController::class, 'create']);
Route::patch('/dcpre/{doctor}', [DoctorController::class, 'preupdate']);
Route::patch('/dcupd/{doctor}', [DoctorController::class, 'update']);
Route::delete('/dcdel/{doctor}', [DoctorController::class, 'destroy']);


Route::resource('dates', DateController::class);
Route::post('/datecr', [DateController::class, 'create']);
Route::patch('/dtupd/{date}', [DateController::class, 'update']);
Route::delete('/dtdel/{date}', [DateController::class, 'destroy']);
