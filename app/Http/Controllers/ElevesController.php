<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ElevesController extends Controller
{
    public function eleves()
    {
        $Eleve = Eleve::all(); #Récupérer les élèves

        return view('student.createStudent', compact('Eleve'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Eleve::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'dob' => $request->dob,
            'student_number' => $request->student_number,
            'email' => $request->email,
            'image' => $request->image,
        ]);
        return "Succès";
    }
    public function destroy($id) {
        $eleveToDelete = Eleve::where('id', $id)->first();
        $eleveToDelete->delete();
    }
}
