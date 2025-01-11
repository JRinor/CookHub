<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    
    public function index()
    {
        $workshops = Workshop::all();
        return view('workshops.index', compact('workshops'));
    }

    
    public function create()
    {
        return view('workshops.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'duration' => 'required|integer',
        ]);

        Workshop::create($request->all());

        return redirect()->route('workshops.index')->with('success', 'Atelier créé avec succès.');
    }

    
    public function show(Workshop $workshop)
    {
        return view('workshops.show', compact('workshop'));
    }

    
    public function edit(Workshop $workshop)
    {
        return view('workshops.edit', compact('workshop'));
    }

    
    public function update(Request $request, Workshop $workshop)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'duration' => 'required|integer',
        ]);

        $workshop->update($request->all());

        return redirect()->route('workshops.index')->with('success', 'Atelier mis à jour avec succès.');
    }

    
    public function destroy(Workshop $workshop)
    {
        $workshop->delete();
        return redirect()->route('workshops.index')->with('success', 'Atelier supprimé avec succès.');
    }
}