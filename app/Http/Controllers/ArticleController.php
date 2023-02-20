<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\SousFamille;
use App\Models\Unite;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {

        $articles = Article::all();
        // dd($articles);
        return view("sellers.articles.index", compact("articles"));

    }


    public function create()
    {
        $articles = Article::all();
        $sous_familles = SousFamille::all();
        $unites = Unite::all();
        return view("sellers.articles.create", compact("articles", "sous_familles", "unites"));
    }




    public function store(Request $request)
    {
        $request->validate(
            [
                "designation" => "required",
                "sous_famille_id" => "required",
                "stock_initial" => "required",
                "prix" => "required",
                "unite_id" => "required",
                "photo" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048"
            ]
        );
        if ($request->has('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/articles_imgs', $filename);
            $request->photo = $filename;
        }
// dd($request->prix);
        Article::create(
            [
            "designation" => $request->designation,
            "prix" => $request->prix,
            "stock_initial" => $request->stock_initial,
            "photo" => $request->photo,
            "sous_famille_id" => $request->sous_famille_id,
            "unite_id" => $request->unite_id
        ]
    );

        return redirect()->route('articles.index')->with("success", "l'article a été ajoutée avec succès");

    }


    public function show(Article $article)
    {
        //
    }


    public function edit(Article $article)
    {

        $sous_familles = SousFamille::all();
        $unites = Unite::all();

        return view("sellers.articles.update",compact("article","sous_familles", "unites"));
        // return ('edit');
    }


    public function update(Request $request, Article $article)
    {
        $request->validate(
            [
                "designation" => "required",
                "sous_famille_id" => "required",
                "stock_initial" => "required",
                "prix" => "required",
                "unite_id" => "required",
                "photo" => "image|mimes:jpg,png,jpeg,gif,svg|max:2048"
            ]
        );


        if ($request->has('photo')) {
            if(file_exists(public_path("uploads/articles_imgs/$article->photo"))){
                unlink(public_path("uploads/articles_imgs/$article->photo"));
                }else{
                dd('File does not exists.');
                }

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/articles_imgs', $filename);
            $request->photo = $filename;
        }
        else{
            $request->photo = $article->photo;
        }


        $my_checkbox_value = $request['active'];

        if ($my_checkbox_value == 1) {
            //checked
            $request->active = 1;

        } else {
            //unchecked
            $request->active = 0;

        }

        $article->update(
            [
                "designation" => $request->designation,
                "prix" => $request->prix,
                "active" => $request->active,
                "stock_initial" => $request->stock_initial,
                "photo" => $request->photo,
                "sous_famille_id" => $request->sous_famille_id,
                "unite_id" => $request->unite_id
            ]
        );
        return redirect()->route('articles.index')->with("success", "la sous famille a été modifiée avec succès");

    }

    public function removeImage($imgFolder, $imgName)
    {
        if (file_exists(public_path('upload/bio.png'))) {
            unlink(public_path('upload/bio.png'));
        } else {
            dd('File does not exists.');
        }
    }
    public function destroy(Article $article)
    {
        if (file_exists(public_path("uploads/articles_imgs/$article->photo"))) {
            unlink(public_path("uploads/articles_imgs/$article->photo"));
        } else {
            dd('File does not exists.');
        }
        $article->delete();
        return redirect()->route('articles.index');

    }
}
