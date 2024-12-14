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

    public function saveEditCategorie(Request $request, $id)
    {
        try {
            $category = Category::where('id', $id)->first();
            if (!empty($category)) {
                $category = $category->fill($request->all());
                $category->save();
                return to_route('categories.index')->with('success', "Categoria alterada com sucesso!");
            }
            return to_route('categories.index')->with('error', "Não foi possivel encontrar a categoria.");
        } catch (Exception $e) {
            \Log::error('Erro ao editar a categoria', ["message" => $e->getMessage()]);
        }
    }

    public function deleteCategorie(Request $request, $id)
    {
        try {
            $category = Category::where('id', $id)->first();
            if (!empty($category)) {
                $category->delete();
                return to_route('categories.index')->with('success', "Categoria excluida com sucesso!");
            }
            return to_route('categories.index')->with('error', "Não foi possivel encontrar a categoria.");
        } catch (Exception $e) {
            \Log::error('Erro ao excluir a categoria', ["message" => $e->getMessage()]);
        }
    }
}
