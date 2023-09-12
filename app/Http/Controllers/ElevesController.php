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

    public function update($id,Request $request){
        $eleveToUpdate = Eleve::where('id', $id)->first();

        if ($request->has('name')) {
            $eleveToUpdate->name = $request->input('name');
        }

        if ($request->has('surname')) {
            $eleveToUpdate->surname = $request->input('surname');
        }

        if ($request->has('dob')) {
            $eleveToUpdate->dob = $request->input('dob');
        }

        if ($request->has('student_number')) {
            $eleveToUpdate->student_number = $request->input('student_number');
        }

        if ($request->has('email')) {
            $eleveToUpdate->email = $request->input('email');
        }

        if ($request->has('image')) {
            // Assurez-vous que votre modèle Eleve a un champ 'image' pour la mise à jour de l'image.
            $eleveToUpdate->image = $request->input('image');
        }

        // Enregistrer les modifications dans la base de données
        $eleveToUpdate->save();
    }

    public function show($id){
        $eleveToShow = Eleve::where('id', $id)->first();
        return view('student.showStudent', compact('eleveToShow'));
    }
}
