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
        return view("sellers.articles.index",compact("articles"));

    }


    public function create()
    {
        $articles = Article::all();
        $sous_familles = SousFamille::all();
        $unites = Unite::all();
        return view("sellers.articles.create",compact("articles","sous_familles","unites"));
    }




    public function store(Request $request)
    {
        $request->validate(
            [
                "sous_famille" => "required",
                "photo" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048"
                // "photo" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000"
            ]
        );
        if ($request->has('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/sous_familles_imgs', $filename);
            $request->photo = $filename;
        }

        Article::create([
            "sous_famille" => $request->sous_famille,
            "photo" => $request->photo,
            "famille_id" => $request->famille_id
        ]);

        return redirect()->route('articles.index')->with("success", "la sous famille a été ajoutée avec succès");

    }


    public function show(Article $article)
    {
        //
    }


    public function edit(Article $article)
    {

        return view("sellers.articles.update");
        // return ('edit');
    }


    public function update(Request $request, Article $article)
    {
        $request->validate(
            [
                "sous_famille" => "required",
            ]);


            if ($request->has('photo')) {
                $file = $request->file('photo');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . "." . $extension;
                $file->move('uploads/sous_familles_imgs', $filename);
                $request->photo = $filename;
            }
            else{
                $request->photo = $article->photo;
            }

            $my_checkbox_value = $request['piece_rechange'];

            if ($my_checkbox_value == 1) {
                //checked
                $request->active = 1;

            } else {
                //unchecked
                $request->active = 0;

            }

            $article->update($request->all());
            return redirect()->route('articles.index')->with("success", "la sous famille a été modifiée avec succès");

    }

public function removeImage($imgFolder,$imgName)
{
if(file_exists(public_path('upload/bio.png'))){
unlink(public_path('upload/bio.png'));
}else{
dd('File does not exists.');
}
}
    public function destroy(Article $article)
    {
        if(file_exists(public_path("uploads/familles_imgs/$article->photo"))){
            unlink(public_path("uploads/familles_imgs/$article->photo"));
            }else{
            dd('File does not exists.');
            }
        $article->delete();
        return redirect()->route('articles.index');

    }
}
