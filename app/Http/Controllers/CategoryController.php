<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TypeFormation;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        $typeformations = TypeFormation::all();
        return view('categories.create', compact('typeformations'));
    }

    public function store(Request $request)
    {
        Category::create([
            
            'nom_categorie' => $request->category,
            'type_formation_id' => $request->typeformation,

        ]);
      
        return redirect()->route('formations.create')->with('success', 'Votre cateorie a été bien créé');
    }
}

