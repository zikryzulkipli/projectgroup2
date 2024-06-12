<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class customerController extends Controller
{
    /**
     * Display the mainpage.
     */
    public function index()
    {
        $customers=DB::table('customers')
        ->orderBy('id','asc')
        ->get();

        return view('checkout', ['customers'=>$customers]);
    }

    /**
     * Display the mainpage.
     */
    public function showIndex()
    {
        return view('index');
    }

    /**
     * Display a listing of the resource.
     */
    public function showShop()
    {
        return view('shop');
    }

    /**
     * Show the checkout view.
     */
    public function showCheckout()
    {
        return view('checkout');
    }

    /**
     * Show the cart view.
     */
    public function showCart()
    {
        return view('cart');
    }

    /**
     * Show the contact view.
     */
    public function showContact()
    {
        return view('contact');

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
        $customer= new Customer();
        $customer->id=$request->id;
        $customer->first_name=$request->first_name;
        $customer->last_name=$request->last_name;
        $customer->address=$request->address;
        $customer->city=$request->city;
        $customer->postcode=$request->postcode;
        $customer->phone_no=$request->phone_no;
        $customer->email=$request->email;
        $customer->created_at=today();
        $customer->updated_at=today();
        $customer->save();
        return redirect ('checkout');
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
