<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Famille;
use App\Models\SousFamille;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function sous_familles_articles($id){
        $articles = Article::all()->where('sous_famille_id', '=', $id);

        return view("client.shops.articles",compact('articles'));

    }
    public function familles_sousfamille($id){
        $sous_familles = SousFamille::all()->where('famille_id', '=', $id)->first();

        $famille = Famille::all()->where("id","=",$id);
        dd($famille->famille);



        return view("client.shops.sous_familles",compact('sous_familles','famille'));

    }
}
