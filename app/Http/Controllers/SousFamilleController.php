<?php

namespace App\Http\Controllers;

use App\Models\SousFamille;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Famille;

class SousFamilleController extends Controller
{


    public function index()
    {
        // $sousfamilles = SousFamille::all();
        // return response()->json($sousfamilles);
        $sousfamilles = SousFamille::all();
        return view("sellers.sousfamilles.index", ["sousfamilles" => $sousfamilles]);
        // return("<h1>index</h1>");

    }


    public function create()
    {
        $familles = Famille::all();
        return view("sellers.sousfamilles.create",compact("familles"));
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

        SousFamille::create([
            "sous_famille" => $request->sous_famille,
            "photo" => $request->photo,
            "famille_id" => $request->famille_id
        ]);

        return redirect()->route('sous-familles.index')->with("success", "la sous famille a été ajoutée avec succès");

    }


    public function show(SousFamille $sousFamille)
    {
        //
    }


    public function edit(SousFamille $sousFamille)
    {
        // dd($sousFamille->famille->famille);
        $familles = Famille::all();
        return view("sellers.sousfamilles.update",compact("sousFamille","familles"));
        // return ('edit');
    }


    public function update(Request $request, SousFamille $sousFamille)
    {
        $request->validate(
            [
                "sous_famille" => "required",
                "photo" => "image|mimes:jpg,png,jpeg,gif,svg|max:2048"

            ]);


            if ($request->has('photo')) {
                if(file_exists(public_path("uploads/sous_familles_imgs/$sousFamille->photo"))){
                    unlink(public_path("uploads/sous_familles_imgs/$sousFamille->photo"));
                    }else{
                    dd('File does not exists.');
                    }

                $file = $request->file('photo');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . "." . $extension;
                $file->move('uploads/sous_familles_imgs', $filename);
                $request->photo = $filename;
            }
            else{
                $request->photo = $sousFamille->photo;
            }

            $my_checkbox_value = $request->active;
            if ($my_checkbox_value == 1) {
                //checked
                // dd("checked $my_checkbox_value");
                $request->active = 1;
            } else {
                //unchecked
                // dd("Not checked $my_checkbox_value");

                $request->active = 0;
            }

            $sousFamille->update(
             [   "sous_famille" => $request->sous_famille,
                "photo" => $request->photo,
                "active" => $request->active,
                "famille_id" => $request->famille_id
            ]
            );
            return redirect()->route('sous-familles.index')->with("success", "la sous famille a été modifiée avec succès");

    }

    public function destroy(SousFamille $sousFamille)
    {
        if(file_exists(public_path("uploads/sous_familles_imgs/$sousFamille->photo"))){
            unlink(public_path("uploads/sous_familles_imgs/$sousFamille->photo"));
            }else{
            dd('File does not exists.');
            }
        $sousFamille->delete();
        return redirect()->route('sous-familles.index')->with("success", "la sous famille a été supprimé avec succès");;

    }
}
