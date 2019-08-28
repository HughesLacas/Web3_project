<?php

namespace App\Http\Controllers;

use App\Joueur;
use App\Partie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Partie $partie)
    {
        //
        $joueur= $partie->joueur;

        return view('parties.index', compact('joueur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $joueurs = Joueur::all();

        return view('parties.create',compact('joueurs'));

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

        $validated =request()->validate([

            'type'=>['required', 'min:3'],
            'date'=>['required', 'date'],
        ]);

        $partie=Partie::create( $validated);
        $joueur=Auth::user()->joueur;
        $partie->joueurs()->attach($joueur,['accepter'=>true]);



        return redirect()->action('JoueurController@profil');

    }
    public function inviter(Partie $partie, Request $request)
    {


        $joueurs = request()->get('joueur_id');

        foreach ($joueurs as $joueur){
            $partie->joueurs()->attach($joueur,['accepter'=>true]);
        }

        return redirect()->action('JoueurController@profil');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Partie  $parties
     * @return \Illuminate\Http\Response
     */
    public function show(Partie $partie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partie  $parties
     * @return \Illuminate\Http\Response
     */
    public function edit(Partie $partie, Joueur $joueur)
    {
        //
        $joueurs = Joueur::all();
        return view('parties.edit',compact('partie', 'joueurs'));
    }
    public function ajoutjoueur(Partie $partie)
    {
        //
        $joueurs = Joueur::all();
        return view('parties.ajoutjoueur',compact('partie','joueurs'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partie  $parties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partie $partie)
    {
        //
        $partie->update(request(['type', 'date']));

        return redirect()->action('JoueurController@profil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partie  $parties
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partie $partie)
    {
        //
        $partie->delete();

        return redirect()->action('JoueurController@profil');
    }
}
