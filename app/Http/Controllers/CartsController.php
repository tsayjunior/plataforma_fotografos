<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Photography;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.checkout');
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
        if (!$request->get('photography_id')) {
            return [
                'message' => 'Agregado al carro',
                'items' => (cart::where('user_id', auth()->user()->id)->pluck('quantity'))->sum(),
            ];
        }

        //consigue el producto
        $photography = Photography::where('id', $request->get('photography_id'))->first();
        // return $photography;

        $photographyFoundCart = cart::where('photography_id', $request->get('photography_id'))->pluck('id');
        // dd($photographyFoundCart->isEmpty());


        if ($photographyFoundCart->isEmpty()) {
            //añadiendo producto al carrito
            $cart = cart::create([
                'photography_id' => $photography->id,
                'quantity' => 1,
                'price' => $photography->sale_price,
                'user_id' => auth()->user()->id,
            ]);
        } else {
            //incrementando en caso que sea necesario, por alguna razon, el increment no me funcionó
            $cart = cart::where('photography_id', $request->get('photography_id'))->first();
            $cart->quantity = $cart->quantity + 1;
            $cart->save();
            // $cart= cart::where('photography_id', $request->get('photography_id'))->first()->increment('quantity');
        }

        //comprobar los artículos del carrito de usuario
        $usersItems = (cart::where('user_id', auth()->user()->id)->pluck('quantity'))->sum();
        // dd($usersItems);

        if ($cart) {
            return [
                'message' => 'Agregado al carro',
                'items' => $usersItems,
            ];
        }
        dd($photography);
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
