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
        $familles = Famille::all();

        // $sous_familles->each(function ($item){
        //     dd($item);
        // });
        // dd($sous_familles);
        return view ('home',["sous_familles"=>$sous_familles,"familles"=>$familles]);
    }
}
