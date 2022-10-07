<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nombre'=>'required',
            'apellido' => 'required',
            'profesion' => 'required',
            'ci'=> 'required',
            'descripcion'=> 'required',
            'fecha_nac'=> 'required',
            'celular'=> 'required',
            'lugar_trabajo'=> 'required',
            'residencia'=> 'required',
            'sexo'=>'required',//M o F
            'tipo'=>'required',//P o F
        ];
        $messages = [
            'nombre.required' => 'El nombre es requerido',
            'apellido.required' => 'El apellido es requerido.',
            'profesion.required' =>'La profesion es requerida.',
            'ci.required' => 'El ci es requerido.',
            'descripcion.required' => 'La descripcion es requerida.',
            'fecha_nac.required' => 'La fecha de nacimiento es requerida.',
            'celular.required' => 'El celular es requerido',
            'lugar_trabajo.required' => 'El lugar de trabajo es requerido.',
            'residencia.required' =>'La residencia es requerida.',
            'sexo.required' => 'El sexo es requerido.',
            'tipo.required' => 'el tipo es requerida.',
        ];

        $this->validate($request, $rules, $messages);

        // return $request;
        $tipo="";
        if($request->tipo == 'Si'){
            $tipo='F';
        }else{
            $tipo="P";
        }
        $persona= persona::create([
            'ci'=> $request->ci,
            'nombre'=> $request->nombre,
            'apellido'=> $request->apellido,
            'descripcion'=> $request->descripcion,
            'fecha_nac'=> $request->fecha_nac,
            'celular'=> $request->celular,
            'profesion'=> $request->profesion,
            'lugar_trabajo'=> $request->lugar_trabajo,
            'residencia'=> $request->residencia,
            'sexo'=> $request->sexo,//M o F
            'tipo'=> $tipo,//P o F
            'user_id'=> auth()->user()->id,
        ]);
        $persona->save();
        return $persona;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(persona $persona)
    {
        //
    }
}
