<?php

namespace App\Http\Controllers;

use App\Models\Paperform;
use Illuminate\Http\Request;

class PaperformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('paperforms.index', ['paperforms' => Paperform::orderBy('name')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paperforms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paperform = new Paperform();
        $paperform->fill($request->all());
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paperform  $paperform
     * @return \Illuminate\Http\Response
     */
    public function show(Paperform $paperform)
    {
        return view('paperforms.show', ['paperform' => $paperform]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paperform  $paperform
     * @return \Illuminate\Http\Response
     */
    public function edit(Paperform $paperform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paperform  $paperform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paperform $paperform)
    {
        $paperform->fill($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paperform  $paperform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paperform $paperform)
    {
        $paperform->delete();
    }
}
