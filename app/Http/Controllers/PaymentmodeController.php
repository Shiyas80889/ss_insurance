<?php

namespace App\Http\Controllers;

use App\Models\paymentmode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PaymentmodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentmode = paymentmode::all();
        return view('paymentmode',['paymentmode'=>$paymentmode]);
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
        $validatedData = $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);


        $paymentmode =  paymentmode::create([
            'name' =>  $request->name,
            'status' =>  $request->status,
         
         ]);
   if($paymentmode){
       return redirect()->route('paymentmode');
    }else{
        return response()->json(['error' => 'Failed']);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(paymentmode $paymentmode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(paymentmode $paymentmode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, paymentmode $paymentmode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $record = paymentmode::findOrFail($id);
        $record->delete();
        return redirect()->back()->with('success', 'Payment mode deleted successfully');
    }
}
