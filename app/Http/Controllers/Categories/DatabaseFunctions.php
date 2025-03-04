<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\DB;

final class DatabaseFunctions extends Controller
{
    function categoriesandnews()
    {
        $news = DB::table('adminnews')->get();
        $data = DB::table('categories')->get();

        return  view('layouts.pages.homepage', ['categories' => $data, 'adminnews' => $news]);
    }
    function news()
    {
        $news = DB::table('adminnews')->get();

        return  view('layouts.pages.news', ['adminnews' => $news]);
    }
    function products($cat_id = null)
    {


        $data = DB::table('products')->where('category_id', $cat_id)->get();

        return  view('layouts.pages.productpage', ['products' => $data]);
    }
}
