<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluationEleve;

class EvaluationEleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function evaluationEleve()
    {
        $EvaluationEleve= EvaluationEleve::all();

        return view('student.displayEvaluationNotes', compact('EvaluationEleve'));
    }

    public function evaluationEleveforGrades()
    {
        $EvaluationEleve= EvaluationEleve::all();
        return view('student.displayStudentGrades', compact('EvaluationEleve'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $EvaluationEleve = EvaluationEleve::where('eleve_id', $id)->get();
        return view('student.displayStudentGrades', compact('EvaluationEleve'));

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
