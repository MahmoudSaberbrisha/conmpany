<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
<<<<<<< HEAD
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Log; // Import the Log facade
=======
use Illuminate\Support\Facades\Log; // Import the Log facade
>>>>>>> 09cb4c8f13bbc80c3e3a01297cc00c9f4f3888e6

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


<<<<<<< HEAD
        return to_route('home', $user)->with('success', 'Registration successful!');
=======
        // Log the registration attempt
        Log::info('Admin registered: ' . $user->email);

        // Redirect to the homepage with a success message
        return redirect()->route('home')->with('success', 'Registration successful!');
>>>>>>> 09cb4c8f13bbc80c3e3a01297cc00c9f4f3888e6
    }


    public function show(Admin $user)
    {
        return view('home', ["admin" => $user]);
    }
}
