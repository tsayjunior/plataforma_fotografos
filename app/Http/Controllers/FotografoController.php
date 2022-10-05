<?php

namespace App\Http\Controllers;

use App\Models\fotografo;
use Illuminate\Http\Request;

class FotografoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fotografo  $fotografo
     * @return \Illuminate\Http\Response
     */
    public function show(fotografo $fotografo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fotografo  $fotografo
     * @return \Illuminate\Http\Response
     */
    public function edit(fotografo $fotografo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fotografo  $fotografo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fotografo $fotografo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fotografo  $fotografo
     * @return \Illuminate\Http\Response
     */
    public function destroy(fotografo $fotografo)
    {
        //
    }

    public function createFotografo()
    {
        return view('fotografo.crearFotografo');
    }   
}   
