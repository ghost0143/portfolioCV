<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;


class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function competence(){
        return view('front.competence');
    }
    public function about(){
        return view('front.about');
    }
    public function portfolio(){
        $projects = Portfolio::all();
        return view('front.portfolio', compact('projects'));
    }
    public function contact(){
        return view('front.contact');
    }

    public function show($id) {
        $project = \App\Models\Portfolio::findOrFail($id);
        return view('front.portfolio_detail', compact('project'));
    }
    
   
}
