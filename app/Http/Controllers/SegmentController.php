<?php

namespace App\Http\Controllers;

use App\Models\segment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SegmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $segment = segment::all();
        return view('segment',['segment'=>$segment]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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


        $segment =  segment::create([
            'name' =>  $request->name,
            'status' =>  $request->status,
         
         ]);
   if($segment){
       return redirect()->route('segment');
    }else{
        return response()->json(['error' => 'Failed']);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(segment $segment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(segment $segment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, segment $segment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $record = segment::findOrFail($id);
        $record->delete();
        return redirect()->back()->with('success', 'Company deleted successfully');
    }
}
