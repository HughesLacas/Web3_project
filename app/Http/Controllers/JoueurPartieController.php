<?php

namespace App\Http\Controllers;

use App\Joueur;
use App\joueur_partie;
use App\Partie;
use Illuminate\Http\Request;

class JoueurPartieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\joueur_partie  $joueur_partie
     * @return \Illuminate\Http\Response
     */
    public function show(joueur_partie $joueur_partie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\joueur_partie  $joueur_partie
     * @return \Illuminate\Http\Response
     */
    public function edit(joueur_partie $joueur_partie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\joueur_partie  $joueur_partie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, joueur_partie $joueur_partie)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\joueur_partie  $joueur_partie
     * @return \Illuminate\Http\Response
     */
    public function destroy(joueur_partie $joueur_partie)
    {
        //
    }

}
