<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function module()
    {
        $Module = Module::all();
        return view('student.displayEvaluationNotes', compact('Module'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = request()-> all();

        $code = $data['code'];
        $name = $data['name'];
        $coefficient = $data['coefficient'];

        $Module = new ModuleController();
        $Module->code=$code;
        $Module->name=$name;
        $Module->coefficient=$coefficient;

        $Module->save();
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
        //
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
