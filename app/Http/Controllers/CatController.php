<?php

namespace App\Http\Controllers;

use App\Models\AdminNews;
use App\Models\Category;
use App\Models\News;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class CatController extends Controller
{
    // Method to get all products
    public function home()
    {
        $categories = Category::all();
        $admin_news = AdminNews::all();

        return view('layouts.pages.homepage', ['categories' => $categories, 'admin_news' => $admin_news]);
    }

    public function catcard()
    {

        $products = Product::all();

        return view('layouts.pages.cart', ['products' => $products]);
    }
    // Method to store a new product
    public function categorystore(Request $request)
    {
        // Logic to store a new product
        $request->validate([
            'name' => 'required|string|max:255',
            'disc' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');
        $category = Category::create([
            'image' => $imagePath,
            'name' => $request->name,
            'disc' => $request->disc,
            'image' => $request->image,
        ]);
        // Assuming you have a Product model to handle product data


        return to_route('categorystore', $category);
    }

    public function destroycat($id)
    {
        // Logic to delete a specific product
        $category = Category::findOrFail($id);
        $category->delete();
        // Logic to delete a specific product

        return view('layouts.masterpagecode');
    }


    public function addProduct(Request $request)
    {
        // Logic to add a new product
        $request->validate([
            'name' => 'required|string|max:255',
            'disc' => 'required|string|max:255',
            'price' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|integer',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');
        $product = Product::create([
            'image' => $imagePath,
            'image' => $imagePath,
            'name' => $request->name,
            'disc' => $request->disc,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ]);
        // Assuming you have a Product model to handle product data


        return response()->json(['success' => 'Product added successfully!', 'products' => $product]);
    }
    // Method to get a specific product
    public function showproduct($id = null)
    {
        // Retrieve products based on the category_id
        $products = Product::where('category_id', $id)->get();

        // Return the view with the retrieved products
        return view('layouts.pages.productpage', ['products' => $products]);
    }

    // Method to update a specific product
    public function updateproduct(Request $request, $id)
    {
        // Logic to update a specific product
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer|max:255',
            'disc' => 'required|string|max:255',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $product->image = $imagePath;
        }

        if ($request->has('name') || $request->has('price') || $request->has('disc')) {
            $product->name = $request->name;
            $product->price = $request->price;
            $product->disc = $request->disc;
        }

        $product->save();

        return response()->json(['products' => 'Product updated successfully']);
    }

    // Method to delete a specific product
    public function destroyproduct($id)
    {
        // Logic to delete a specific product
        $product = Product::findOrFail($id);
        $product->delete();
        // Logic to delete a specific product

        return view('layouts.pages.homepage');
    }
}
