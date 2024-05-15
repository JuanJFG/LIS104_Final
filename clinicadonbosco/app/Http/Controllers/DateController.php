<?php

namespace App\Http\Controllers;

use App\Models\date;
use App\Models\doctor;
use App\Models\patient;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function create(){
        $attributes = request()->validate([
            'doctorname' => 'required',
            'patientname' => 'required',
            'doctorid' => 'required',
            'patientid' => 'required',
            'date' => 'required'
        ]);
        date::create($attributes);
        return redirect('dates');
    }
    public function index(){
        $dates = date::all();
        $doctors = doctor::all();
        $patients = patient::all();
        return view('date.read', [
            'dates' => $dates,
            'patients' => $patients,
            'doctors' => $doctors
        ]);
    }
    public function update(date $date){
        $date->update(['isDone' => true]);
        return redirect('dates');
    }
    public function destroy(date $date){
        $date->delete();
        return redirect('dates');
    }    
}
