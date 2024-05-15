<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function create(){
        $attributes = request()->validate([
            'name' => 'required',
            'lastname' => 'nullable',
            'email' => 'required',
            'birth' => 'required',
            'phone' => 'required',
            'license' => 'required',
            'speciality' => 'required'
        ]);
        doctor::create($attributes);
        return redirect('doctors');
    }
    public function index(){
        $doctors = doctor::all();
        return view('doctor.read', [
            'doctors' => $doctors
        ]);
    }
    public function update(doctor $doctor){
        $attributes = request()->validate([
            'name' => 'required',
            'lastname' => 'nullable',
            'email' => 'required',
            'birth' => 'required',
            'phone' => 'required',
            'license' => 'required',
            'speciality' => 'required'
        ]);
        $doctor->update($attributes);
        return redirect('doctors');
    }
    public function preupdate(doctor $doctor){
        return view('doctor.update', [
            'doctor' => $doctor
        ]);
    }
     public function destroy(doctor $doctor){
        $doctor->delete();
        return redirect('doctors');
    }    
}
