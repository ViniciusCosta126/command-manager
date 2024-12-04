<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 1)->get();
        return view('pages.categories.index')->with('categories', $categories);
    }
}
