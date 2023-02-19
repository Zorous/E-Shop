<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use Illuminate\Http\Request;

class FamilleController extends Controller
{

    public function index()
    {
        // $familles = Famille::all();
        // return response()->json($familles);
        $familles = Famille::all();
        return view("sellers.familles.index", ["familles" => $familles]);
        // return("<h1>index</h1>");

    }


    public function create()
    {
        return view("sellers.familles.create");
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                "famille" => "required",
                "photo" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048"
                // "photo" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000"
            ]
        );
        if ($request->has('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/familles_imgs', $filename);
            $request->photo = $filename;
        }

        Famille::create(
            [
            "famille" => $request->famille,
            "photo_famille" => $request->photo
        ]
    );

        return redirect()->route('familles.index')->with("success", "la famille a été ajoutée avec succès");

    }


    public function show(Famille $famille)
    {
        //
    }


    public function edit(Famille $famille)
    {

        return view("sellers.familles.update", ["famille" => $famille]);
        // return ('edit');
    }


    public function update(Request $request, Famille $famille)
    {
        $request->validate(
            [
                "famille" => "required",
                "photo" => "image|mimes:jpg,png,jpeg,gif,svg|max:2048"

            ]
        );

        if ($request->has('photo')) {
            if(file_exists(public_path("uploads/familles_imgs/$famille->photo_famille"))){
                unlink(public_path("uploads/familles_imgs/$famille->photo_famille"));
                }else{
                dd('File does not exists.');
                }

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/familles_imgs', $filename);
            $request->photo = $filename;
        }
        else{
            $request->photo = $famille->photo;
        }

        $my_checkbox_value = $request['piece_rechange'];
        if ($my_checkbox_value == 1) {
            //checked
            $request->active = 1;
        } else {
            //unchecked
            $request->active = 0;
        }

        $famille->update(
            [
                "famille" => $request->famille,
                "photo_famille" => $request->photo
            ]
        );

        return redirect()->route('familles.index')->with("success", "la famille a été modifiée avec succès");

    }

    public function destroy(Famille $famille)
    {
        if (file_exists(public_path("uploads/familles_imgs/$famille->photo_famille"))) {
            unlink(public_path("uploads/familles_imgs/$famille->photo_famille"));
        } else {
            dd('File does not exists.');
        }
        $famille->delete();
        return redirect()->route('familles.index');

    }
}
