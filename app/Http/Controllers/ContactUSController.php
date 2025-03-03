<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUSController extends Controller
{
    // Method to get all products
    public function contactget()
    {
        $contacts = Contact::all();

        return view('layouts.pages.contact', ['contacts' => $contacts]);
    }


    // Method to store a new product
    public function contactstore(Request $request)
    {
        // Logic to store a new product
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'disc' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string|max:255',

        ]);

        $contacts = Contact::create([
            'name' => $request->name,
            'message' => $request->message,
            'email' => $request->email,
            'disc' => $request->disc,
            'phone' => $request->phone,
        ]);
        // Assuming you have a Product model to handle product data


        return to_route('addcontact', ['contacts' => $contacts]);
    }

    public function destroycontact($id)
    {
        // Logic to delete a specific product
        $contacts = Contact::findOrFail($id);
        $contacts->delete();
        // Logic to delete a specific product

        return view('layouts.masterpagecode');
    }
    // Method to get a specific product
    // public function show($id = null)
    // {
    //     // Retrieve products based on the category_id
    //     $products = Product::where('category_id', $id)->get();

    //     // Return the view with the retrieved products
    //     return view('layouts.pages.productpage', ['products' => $products]);
    // }

    // Method to update a specific product
    public function update(Request $request, $id)
    {
        // Logic to update a specific product
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'disc' => 'required|string|max:255',
            'phone' => 'required|integer|max:255',
            'message' => 'required|string|max:255',
        ]);

        $contacts = Contact::findOrFail($id);



        if ($request->has('name') || $request->has('email') || $request->has('disc') || $request->has('phone') || $request->has('message')) {
            $contacts->name = $request->name;
            $contacts->email = $request->email;
            $contacts->phone = $request->phone;
            $contacts->message = $request->message;
            $contacts->disc = $request->disc;
        }

        $contacts->save();

        return response()->json(['contacts' => 'successfully']);
    }
}
