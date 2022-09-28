<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function index()
    {
        $treatments = Treatment::with('doctors')->get();
        return view('treatments.list', compact('treatments'));
    }

    public function addTreatment()
    {
        $doctors = Doctor::all();
        return view('treatments.add', compact('doctors'));
    }

    public function storeTreatment(Request $request)
    {
        $validated = $request->validate([
            'doctor_id' => 'required',
            'name' => 'required',
            'price' => 'required',
        ]);

        $treatment = new Treatment();
        $treatment->doctor_id = $request->input('doctor_id');
        $treatment->name = $request->input('name');
        $treatment->price = $request->input('price');
        $treatment->save();

        return redirect()->route('list.treatment')->with('status', 'Tedavi başarıyla eklendi.');
    }

    public function deleteTreatment($id)
    {
        Treatment::destroy($id);
        return redirect()->route('list.treatment');
    }


}
