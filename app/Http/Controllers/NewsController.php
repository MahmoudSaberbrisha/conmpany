<?php

namespace App\Http\Controllers;

use App\Models\AdminNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Import Log class for logging

class NewsController extends Controller
{
    // Method to get all products

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
        if (!$imagePath) {
            Log::error('Image upload failed');
            return response()->json(['message' => 'Image upload failed'], 422);
        }


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