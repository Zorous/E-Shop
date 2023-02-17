<?php

namespace App\Http\Controllers;

use App\Models\SousFamille;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SousFamilleController extends Controller
{

    public function index()
    {
        // $subFamille = SousFamille::all();
        $subFamille = DB::select("SELECT * FROM sous_familles,familles WHERE famille_id=familles.id");

        // $test = $subFamille[0]->famille;
        return response()->json($subFamille);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SousFamille  $sousFamille
     * @return \Illuminate\Http\Response
     */
    public function show(SousFamille $sousFamille)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SousFamille  $sousFamille
     * @return \Illuminate\Http\Response
     */
    public function edit(SousFamille $sousFamille)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SousFamille  $sousFamille
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SousFamille $sousFamille)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SousFamille  $sousFamille
     * @return \Illuminate\Http\Response
     */
    public function destroy(SousFamille $sousFamille)
    {
        //
    }
}
