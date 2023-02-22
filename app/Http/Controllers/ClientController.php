<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Famille;
use App\Models\SousFamille;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function sous_familles_articles($id)
    {
        $articles = Article::where('sous_famille_id', '=', $id)->get();
        // return $articles;
        // foreach ($articles as $ar) {
        //     return $ar->designation;
        // }
        return view("client.shops.articles",compact('articles'));


    }
    public function familles_sousfamille($id)
    {
        $sous_familles = SousFamille::all()->where('famille_id', '=', $id);
        // dd($sous_familles->sous_famille);

        $famille = Famille::all()->where("id", "=", $id)->first();
        // dd($famille->photo_famille);
        // $banner = $famille[0]->photo_famille;



        return view("client.shops.sous_familles", compact('sous_familles', 'famille'));

    }


    public function familles_view()
    {
        $familles = Famille::all();
        return view('client.shops.familles', compact("familles"));
    }
}
