<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index($sf){
        $articles = Article::all()->where('sous_famille_id', '=', $sf);

        return view("client.articles",compact('articles'));

    }
}
