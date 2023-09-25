<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Evaluation extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evaluations = Evaluation::all();
        return view('evaluation.createEvaluation', compact('evaluations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('evaluation.createEvaluation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'date' => 'required|date',
            'relation_mod' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'coefficients' => 'required|integer',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Evaluation::create([
            'date' => $request->date,
            'relation_mod' => $request->relation_mod,
            'title' => $request->title,
            'coefficients' => $request->coefficients,
        ]);
        return "Succès";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $evaluationToShow = Evaluation::where('id', $id)->first();
            return view('evaluation.showEvaluation', compact('evaluationToShow'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $evaluationToEdit = Evaluation::where('id', $id)->first();
        return view('evaluation.editEvaluation', compact('evaluationToEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $evaluationToUpdate = Evaluation::where('id', $id)->first();

        if ($request->has('date')) {
            $evaluationToUpdate->date = $request->input('date');
        }

        if ($request->has('relation_mod')) {
            $evaluationToUpdate->relation_mod = $request->input('relation_mod');
        }

        if ($request->has('title')) {
            $evaluationToUpdate->title = $request->input('title');
        }

        if ($request->has('coefficients')) {
            $evaluationToUpdate->coefficients = $request->input('coefficients');
        }

        $evaluationToUpdate->save();
        return "Succès";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $evaluationToDelete = Evaluation::where('id', $id)->first();
        $evaluationToDelete->delete();
    }
}
