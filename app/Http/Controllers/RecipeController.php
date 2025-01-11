<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }

    
    public function create()
    {
        return view('recipes.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'ingredients' => 'required',
            'steps' => 'required',
            'image' => 'image|nullable',
        ]);

        $recipe = new Recipe($request->all());

        if (auth()->check()) {
            $recipe->user_id = auth()->id();
        } else {
            
            
            return redirect()->route('recipes.create')->withErrors('You must be logged in to create a recipe.');
        }

        if ($request->hasFile('image')) {
            $recipe->image = $request->file('image')->store('images', 'public');
        }
        $recipe->save();

        return redirect()->route('recipes.index')->with('success', 'Recette créée avec succès.');
    }

    
    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

    
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', compact('recipe'));
    }

    
    public function update(Request $request, Recipe $recipe)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'ingredients' => 'required',
            'steps' => 'required',
            'image' => 'image|nullable',
        ]);

        $recipe->update($request->all());
        if ($request->hasFile('image')) {
            $recipe->image = $request->file('image')->store('images', 'public');
        }
        $recipe->save();

        return redirect()->route('recipes.index')->with('success', 'Recette mise à jour avec succès.');
    }

    
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect()->route('recipes.index')->with('success', 'Recette supprimée avec succès.');
    }
}