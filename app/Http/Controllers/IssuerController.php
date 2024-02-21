<?php

namespace App\Http\Controllers;

use App\Models\issuer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class IssuerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $issuer = issuer::all();
        return view('issuer',['issuer'=>$issuer]);
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


        $issuer =  issuer::create([
            'name' =>  $request->name,
            'status' =>  $request->status,
         
         ]);
   if($issuer){
       return redirect()->route('issuer');
    }else{
        return response()->json(['error' => 'Failed']);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(issuer $issuer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(issuer $issuer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, issuer $issuer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $record = issuer::findOrFail($id);
        $record->delete();
        return redirect()->back()->with('success', 'Issuer deleted successfully');
    }
}
