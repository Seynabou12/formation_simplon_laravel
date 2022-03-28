<?php

namespace App\Http\Controllers;

use App\Models\TypeFormation;
use Illuminate\Http\Request;

class TypeFormationController extends Controller
{
    public function index()
    {
        $typeformations = TypeFormation::all();
        return view('typeformation.index', compact('typeformations'));
    }

    public function create()
    {
        return view('typeformation.create');
    }

    public function store(Request $request)
    {
        TypeFormation::create([
            
            'nom' => $request->nom,
            'description' => $request->description,

        ]);
      
        return redirect()->route('categories.create')->with('success', 'Votre type formation a été bien créé');
    }
}
