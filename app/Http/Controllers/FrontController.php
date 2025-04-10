<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('front.portfolio');
    }
    public function contact(){
        return view('front.contact');
    }
}
