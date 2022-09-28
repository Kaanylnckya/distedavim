<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Treatment;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.list',compact('doctors'));
    }

    public function addDoctor()
    {
        return view('doctors.add');
    }

    public function storeDoctor(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'department' => 'required',
        ]);

        $doctor = new Doctor();
        $doctor->name = $request->input('name');
        $doctor->department = $request->input('department');
        $doctor->save();

        return redirect()->route('list.doctor')->with('status', 'Doktor başarıyla eklendi.');
    }

    public function deleteDoctor($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();

        return redirect()->route('list.doctor');
    }

    public function detail($id)
    {
        $treatments = Treatment::where('doctor_id', $id)->get();
        return view('doctors.detail', compact('treatments'));
    }
}
