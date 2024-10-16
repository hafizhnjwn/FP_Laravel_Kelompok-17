<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\Specialty;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }
    
    public function upload(Request $request)
    {
        $doctor=new doctor;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image=$imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->room=$request->room;
        $specialty = Specialty::where('name', $request->input('speciality'))->first();

        if ($specialty) {
            // If specialty is found, assign the specialty ID to the doctor
            $doctor->specialty_id = $specialty->id;
            $doctor->save();
            return redirect()->back()->with('message', 'Doctor Added Successfully');
        } else {
            // Specialty not found, handle the error
            return back()->with('message', 'Specialty not found');
        }
    }

    public function deletedoctor($id){
        if(Auth::user()->usertype=='1')
        {
            $data=doctor::find($id);
            $data->delete();
        }
        return redirect()->back();
    }

    public function updatedoctor($id)
    {
        if(Auth::user()->usertype=='1')
        {
            $data = doctor::find($id);
            return view('admin.update_doctor', compact('data'));
        }
        return redirect()->back();
    }

    public function editdoctor(Request $request, $id)
    {
        if(Auth::user()->usertype=='1')
        {
            $doctor = doctor::find($id);
            $doctor->name = $request->name;
            $doctor->phone = $request->phone;
            $doctor->room = $request->room;
            
            $image = $request->file;
            if($image)
            {
                $imagename = time().'.'.$image->getClientOriginalExtension();
                $request->file->move('doctorimage', $imagename);
                $doctor->image = $imagename;
            }
            
            $specialty = Specialty::where('name', $request->input('speciality'))->first();

            if ($specialty) {
                // If specialty is found, assign the specialty ID to the doctor
                $doctor->specialty_id = $specialty->id;
                $doctor->save();
                return redirect()->back()->with('message', 'Doctor Updated Successfully');
            } else  {
                // Specialty not found, handle the error
                return back()->with('message', 'Specialty not found');
            }
        }
        return redirect()->back();
    }
}
