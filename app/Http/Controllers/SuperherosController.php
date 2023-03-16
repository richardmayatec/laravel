<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// REMEMBER IMPORTING ALL YOUR MODELS
use App\Models\Superheros;

class SuperherosController extends Controller
{
    public function index(){
        $page_title = "Super Heros";

        // select * from superheros
        $superheros = Superheros::all();

        // select * from superheros where
        $men = Superheros::where('gender', '=', 'Male')->get();

        return view('superheros', compact('page_title', 'superheros', 'men'));
    }
}
