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
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Eleve::create([
            'nom' => $request->nom,
            'email' => $request->email,
        ]);
        return "Succès";
    }
}
