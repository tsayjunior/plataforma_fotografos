<?php

namespace App\Http\Controllers;

use App\Models\fotografo;
use App\Models\persona;
use App\Models\Photography;
use Illuminate\Http\Request;

class photographiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(auth()->user());
        $photographies= Photography::all();//fotografias
        if((auth()->user())){
            $user_id= auth()->user()->id;
            // $fotografo= fotografo::where('user_id', $user_id)->exists();
            $persona= persona::where('user_id', $user_id)->exists();
            if($persona){
                return view('product', compact('photographies'));
            }else{
                return view('fotografo.crearFotografo', compact($user_id));
            }
        }

        return view('product', compact('photographies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fotografo.crearFotografo');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
