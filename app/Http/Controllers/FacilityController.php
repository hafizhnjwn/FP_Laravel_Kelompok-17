<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class FacilityController extends Controller
{
    public function addview()
    {
        return view('admin.add_facility');
    }

    public function store_facility(Request $request)
    {
        $facility = new Facility;

        // Upload icon jika tersedia
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconName = time() . '.' . $icon->getClientOriginalExtension();
            $icon->move('facility-icons', $iconName);
            $facility->icon = $iconName;
        }

        // Assign other fields
        $facility->name = $request->name;
        $facility->description = $request->description;
        $facility->slug = Str::slug($request->name); // Generate slug automatically

        $facility->save();

        return redirect()->back()->with('message', 'Facility Added Successfully');
    }

    public function showlist()
    {
        $facilities = Facility::all();
        return view('admin.facility_list', compact('facilities'));
    }

    public function deletefacility($id)
    {
        $facility = Facility::find($id);
        $facility->delete();

        return redirect()->back()->with('message', 'Facility Deleted Successfully');
    }

    public function updatefacility($id)
    {
        $facility = Facility::find($id);
        return view('admin.edit_facility', compact('facility'));
    }

    public function update(Request $request, $id)
    {
        $facility = Facility::find($id);

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconName = time() . '.' . $icon->getClientOriginalExtension();
            $icon->move('facility-icons', $iconName);
            $facility->icon = $iconName;
        }

        $facility->name = $request->name;
        $facility->description = $request->description;
        $facility->slug = Str::slug($request->name);

        $facility->save();

        return redirect()->back()->with('message', 'Facility Updated Successfully');
    }
}
