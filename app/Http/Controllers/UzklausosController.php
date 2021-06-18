<?php

namespace App\Http\Controllers;

use App\Models\Uzklausos;
use Illuminate\Http\Request;

class UzklausosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Uzklausos $uzklausos)
    {
        return view('uzklausos.index', ['uzklausos' => $uzklausos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Uzklausos $uzklausos)
    {
        return view('uzklausos.create', ['uzklausos' => $uzklausos]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uzklausa = new Uzklausos();
        $uzklausa->fill($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Uzklausos  $uzklausos
     * @return \Illuminate\Http\Response
     */
    public function show(Uzklausos $uzklausos)
    {
        return view('uzklausos.show', ['uzklausos' => $uzklausos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Uzklausos  $uzklausos
     * @return \Illuminate\Http\Response
     */
    public function edit(Uzklausos $uzklausos)
    {
        return view('uzklausos.edit', ['uzklausos' => $uzklausos]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Uzklausos  $uzklausos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uzklausos $uzklausos)
    {
        $uzklausos->fill($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Uzklausos  $uzklausos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uzklausos $uzklausos)
    {
        $uzklausos->delete();
    }
}
