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

    public function getCartIetmsForCheckout()
    {
        $finalData = [];
        $cartItems = cart::with('photography')->where('user_id', auth()->user()->id)->get();
        $amount = 0;

        if (isset($cartItems)) {
            // echo "<pre>";
            foreach ($cartItems as $cartItem) {
                if ($cartItem->photography) {
                    foreach ($cartItem->photography as $cartPhotography) {
                        // var_dump($cartPhotography->name);
                        if ($cartPhotography->id == $cartItem->photography_id) {
                            $finalData[$cartItem->photography_id]['id'] = $cartPhotography->id;
                            $finalData[$cartItem->photography_id]['name'] = $cartPhotography->name;
                            $finalData[$cartItem->photography_id]['sale_price'] = $cartItem->price;
                            $finalData[$cartItem->photography_id]['quantity'] = $cartItem->quantity;
                            $finalData[$cartItem->photography_id]['total'] = $cartItem->price * $cartItem->quantity;
                            $amount += $cartItem->price * $cartItem->quantity;
                            $finalData['totalAmount']= $amount;
                        }
                    }
                    // var_dump(($cartItem->photography[0]->name));
                }
            };
            // dd($finalData);
        }
        // dd($cartItems);
        return response()->json($finalData);
    }
    public function processPayment(Request $request)
    {
        $firstName=$request->get('firstName');
        $lastName=$request->get('lastName');
        $email=$request->get('email');
        $phone=$request->get('phone');
        $address=$request->get('address');
        $city=$request->get('city');
        $state=$request->get('state');
        $zipCode=$request->get('zipCode');
        $country=$request->get('country');
        $cardType=$request->get('cardType');
        $expirationMonth=$request->get('expirationMonth');
        $expirationYear=$request->get('expirationYear');
        $cvv=$request->get('cvv');
        $cardNumber=$request->get('cardNumber');
        

        dd($request->all());
    }
}
