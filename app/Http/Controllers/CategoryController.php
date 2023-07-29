<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        //get all categories
        return view('categories.index', [
            'categories' => Category::all()
        ]);
    }

    public function show()
    {
        return view('categories.show', [
            'category' => Category::find()
        ]);
    }
}
