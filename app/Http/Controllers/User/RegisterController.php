<?php


namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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
        return view('user.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'name' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


<<<<<<< HEAD
        return view('layouts.pages.homepage', $user)->with('success', 'Registration successful!');
=======
        // Log the registration attempt
        Log::info('User registered: ' . $user->email);

        // Redirect to the homepage with a success message
        return redirect()->route('homepage')->with('success', 'Registration successful!');
>>>>>>> 09cb4c8f13bbc80c3e3a01297cc00c9f4f3888e6
    }


    public function show(User $user)
    {
        return view('layouts.pages.homepage', ["user" => $user]);
    }
}
