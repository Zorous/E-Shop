<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SousFamille;
use App\Models\Famille;

class HomeController extends Controller
{
    public function index()
    {


        $sous_familles = SousFamille::all();
        $familles = Famille::limit(3)->get();

        return view ('client.home',compact("sous_familles","familles"));
    }
}
