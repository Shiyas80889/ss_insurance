<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    
    public function login(Request $request){
        // $validateData = $request->validate([
        //     'name' => 'required',
        //     'password' => 'required'
        // ]);

        // if(Auth::attempt(['name' => $request->name,'password' => $request->password])){
        //      return redirect()->route('dashboard'); 
        // }else{
        //    return redirect()->route('dashboard');
        // }

        $validatedData = $request->validate([
            'name' => 'required',
            'password' => [
                'required',
                function ($attribute, $value, $fail) use ($request) {
                    if (!Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
                        $fail('The provided credentials do not match our records.');
                    }
                    $user =  Auth::user();
                    if (!$user || !Hash::check($value, $user->password)) {
                        $fail('The provided credentials do not match our records.');
                    }
                },
            ],
        ]);
        return redirect()->route('dashboard');


    } 

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('sign-in');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('dashboard');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }
}
