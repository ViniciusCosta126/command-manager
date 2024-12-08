<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 1)->get();
        return view('pages.categories.index')->with('categories', $categories);
    }

    public function createCategorie(Request $request)
    {
        try {
            $category = Category::create($request->all());
            return to_route('categories.index')->with('success', "Categoria criada com sucesso!");
        } catch (Exception $e) {
            \Log::error('Erro ao criar categoria', ["message" => $e->getMessage()]);
        }
    }
}
