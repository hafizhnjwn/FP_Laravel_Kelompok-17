<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;
use App\Models\Facility;
use App\Models\Appointment;


class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            $doctors = doctor::all();
            $facilities = Facility::all();
            if (Auth::user()->usertype == '0') {
                return view('user.home', compact('doctors', 'facilities'));
            } else {
                return view('admin.home', compact('doctors', 'facilities'));
            }
        } else {
            return redirect()->back();
        }
    }
    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctors = doctor::all();
            $facilities = Facility::all();
            return view('user.home', compact('doctors', 'facilities'));
        }
    }

    public function appointment(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'number' => 'required|numeric',
            'message' => 'nullable|string|max:1000',
            'doctor' => 'required|string',
        ]);

        $appointment = new Appointment;
        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->date = $request->date;
        $appointment->phone = $request->number;
        $appointment->message = $request->message;
        $appointment->doctor = $request->doctor;
        $appointment->status = 'In progress';

        if (Auth::id()) {
            $appointment->user_id = Auth::user()->id;
        }

        $appointment->save();

        return response()->json(['message' => 'Appointment Set Successfully']);
    }

    public function myappointment()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $appoint = Appointment::where('user_id', "$userid")->get();

            return view('user.my_appointment', compact('appoint'));
        } else {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        // dd("Function called, ID: " . $id);
        // Temukan appointment berdasarkan ID
        $data = Appointment::find($id);

        // Cek apakah appointment ditemukan
        if (!$data) {
            return redirect()->back()->with('error', 'Appointment not found.');
        }

        // Jika ditemukan, update status menjadi 'canceled'
        $data->status = 'Canceled';
        $data->save(); // Simpan perubahan

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Appointment status updated to canceled.');
    }
}
