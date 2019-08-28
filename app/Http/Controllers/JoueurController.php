<?php

namespace App\Http\Controllers;


use App\Joueur;
use App\Partie;
use App\Project;


use App\User;
use Illuminate\Http\Request;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return $partie;
        $joueurs = Joueur::all();

        return view('joueurs.index',compact('joueurs'));
        //return view('joueurs.index');

    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Joueur $joueur)
    {
        //
        $joueurs = Joueur::where('user_id',auth()->id())->get();

        //dd();
        if($joueurs->isEmpty())
        {
            return view('joueurs.create');
        }else{
            return view('joueurs.profil',compact('joueurs'));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $joueurs = Joueur::where('user_id',auth()->id())->get();
        if($joueurs->shuffle($items = null))
        {
            $validated =request()->validate([

                'prenom'=>['required', 'min:3'],
                'nom'=>['required', 'min:3'],
                'disponible'=>['required', 'min:3'],
                'reseau'=>['boolean'],
                'double'=>['boolean'],
                'doubleopen'=>['boolean'],

            ]);
            $validated['user_id']= auth()->id();
            Joueur::create( $validated);
        }
        return redirect('/joueurs');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Joueur  $joueurs
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        //
        //$joueurs = Joueur::all();

        return view('joueurs.profil',compact('joueurs'));

    }
    public function profil(Partie $partie)
    {
        //
        $joueurs = Joueur::where('user_id',auth()->id())->get();



        return view('joueurs.profil',compact('joueurs','partie'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Joueur  $joueurs
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur)
    {
        //dd($joueur);

        return view('joueurs.edit', compact('joueur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Joueur  $joueurs
     * @return \Illuminate\Http\Response
     */
    public function update(Joueur $joueur)
    {
        //
        $champs=array_keys($joueur->services);
        $champs[]='disponible';
        $joueur->update(request($champs));
        //dd(request()->all());
        return redirect()->action('JoueurController@profil');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Joueur  $joueurs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        //
    }



}
