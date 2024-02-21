<?php

namespace App\Http\Controllers;

use App\Models\coverage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CoverageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coverage = coverage::all();
        return view('coverage',['coverage'=>$coverage]);
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


        $coverage =  coverage::create([
            'name' =>  $request->name,
            'status' =>  $request->status,
         
         ]);
   if($coverage){
       return redirect()->route('coverage');
    }else{
        return response()->json(['error' => 'Failed']);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(coverage $coverage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(coverage $coverage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, coverage $coverage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $record = coverage::findOrFail($id);
        $record->delete();
        return redirect()->back()->with('success', 'Coverage deleted successfully');
    }
}
