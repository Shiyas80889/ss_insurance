<?php

namespace App\Http\Controllers;

use App\Models\referance;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ReferanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $referance = referance::all();
        return view('referance',['referance'=>$referance]);
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


        $referance =  referance::create([
            'name' =>  $request->name,
            'status' =>  $request->status,
         
         ]);
   if($referance){
       return redirect()->route('referance');
    }else{
        return response()->json(['error' => 'Failed']);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(referance $referance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(referance $referance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, referance $referance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $record = referance::findOrFail($id);
        $record->delete();
        return redirect()->back()->with('success', 'Referance deleted successfully');
    }
}
