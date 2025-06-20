<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;


class PortfolioController extends Controller
{
    public function formPortfolio(){
        return view('front.formPortfolio');
    }
    public function create(Request $request) {
        $validatedData = $request->validate([
            'nomProjet'   => 'required|string|max:255',
            'techno'      => 'required|string|max:255',
            'categorie'   => 'required|string|max:255',
            'lien'        => 'required|url',
            'description' => 'required|string',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    
        // Gérer l'upload de l'image
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        } 
        
        $portfolio = new Portfolio();
        $portfolio->nomProjet   = $validatedData['nomProjet'];
        $portfolio->techno      = $validatedData['techno'];
        $portfolio->categorie   = $validatedData['categorie'];
        $portfolio->lien        = $validatedData['lien'];
        $portfolio->description = $validatedData['description'];
        $portfolio->image       = $imageName ?? null;




        $portfolio->save();
    
        return redirect()->route('formPortfolio')->with('success', 'Projet créé avec succès.');
    }
    
}
