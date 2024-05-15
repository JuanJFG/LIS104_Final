<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function create(){
        $attributes = request()->validate([
            'name' => 'required',
            'lastname' => 'nullable',
            'email' => 'required',
            'birth' => 'required',
            'phone' => 'required'
        ]);
        patient::create($attributes);
        return redirect('patients');
    }
    public function index(){
        $patients = patient::all();
        return view('patient.read', [
            'patients' => $patients
        ]);
    }
    public function update(patient $patient){
        $attributes = request()->validate([
            'name' => 'required',
            'lastname' => 'nullable',
            'email' => 'required',
            'birth' => 'required',
            'phone' => 'required'
        ]);
        $patient->update($attributes);
        return redirect('patients');
    }
    public function preupdate(patient $patient){
        return view('patient.update', [
            'patient' => $patient
        ]);
    }
    public function destroy(patient $patient){
        $patient->delete();
        return redirect('patients');
    }    
}