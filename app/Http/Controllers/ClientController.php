<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Famille;
use App\Models\SousFamille;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function sous_familles_articles($fid,$sid)
    {
        $articles = Article::where('sous_famille_id', '=', $sid)->get();
        $sf = SousFamille::whereId($sid)->get()->first();
        $f = Famille::whereId($fid)->get()->first();
        // return ($f);
        return view("client.shops.articles",compact('articles','sf','f'));


    }
    public function familles_sousfamille($id)
    {
        $sous_familles = SousFamille::all()->where('famille_id', '=', $id);
        $famille = Famille::all()->where("id", "=", $id)->first();




        return view("client.shops.sous_familles", compact('sous_familles', 'famille'));

    }


    public function familles_view()
    {
        $familles = Famille::all();
        return view('client.shops.familles', compact("familles"));
    }
}
