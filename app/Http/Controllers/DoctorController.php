<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;
use App\Models\Facility;
use App\Models\Specialty;
use App\Models\Appointment;

class DoctorController extends Controller
{
    public function doctor()
    {
        if (Auth::id()) {
            $specialties = Specialty::all();

            return view('user.doctor', ['title' => 'TCare Doctors', 'specialties' => $specialties]);
        } else {
            $specialties = Specialty::all();

            return view('user.doctor', ['title' => 'TCare Doctors', 'specialties' => $specialties]);
        }
    }
}
