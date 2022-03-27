<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categorie = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        Category::create([
            
            'nom_categorie' => $request->category,

        ]);
      
        return redirect()->route('formations.create')->with('success', 'Votre cateorie a été bien créé');
    }
}

