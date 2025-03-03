<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Log; // Import the Log facade

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:8|confirmed',
            'name' => 'required',
        ]);

        $user = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        return to_route('home', $user)->with('success', 'Registration successful!');
    }


    public function show(Admin $user)
    {
        return view('home', ["admin" => $user]);
    }
}
