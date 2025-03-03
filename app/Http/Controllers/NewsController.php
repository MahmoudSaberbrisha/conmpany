<?php

namespace App\Http\Controllers;

use App\Models\AdminNews;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Method to get all products
    public function adminnews()
    {

        $admin_news = AdminNews::all();

        return view('layouts.pages.homepage', ['admin_news' => $admin_news]);
    }
    public function news()
    {
        $admin_news = AdminNews::all();

        return view('layouts.pages.news', ['admin_news' => $admin_news]);
    }


    public function addnews(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'adminname' => 'required|string|max:255',
            'disc' => 'required|string',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the image upload if present
        $imagePath = $request->hasFile('image') ? $request->file('image')->store('images', 'public') : null;

        // Create a new news entry in the admin_news table
        AdminNews::create([
            'adminname' => $request->adminname,
            'disc' => $request->disc,
            'image' => $imagePath,
            'datatime' => now(), // Set the current date and time
        ]);

        // Return a response indicating success
        return response()->json(['message' => 'News added successfully']);
    }
}
