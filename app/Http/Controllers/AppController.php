<?php

namespace App\Http\Controllers;

use App\Joueur;
use App\User;
use Illuminate\Http\Request;
use App\database\seeds;
class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function installer () {
        $db = \DB::connection()->getDatabaseName();
        file_put_contents($db, '');
        \Artisan::call("migrate");
        //$users=factory(User::class, 35)->create();

        //foreach ($users as $user){
            /*$validated =request()->validate([

                'prenom'=>[$user->prenom],
                'nom'=>[$user->nom],
                'disponible'=>[$user->disponible],
                'reseau'=>[true],
                'double'=>[false],
                'doubleopen'=>[false],
                //'notification'=>['int']

            ]);*/

            for ($i=1;$i<=3;$i++){
                $user=factory(User::class)->create();
                $validated['user_id']= $i;
                $validated['prenom']= $user->prenom;
                $validated['nom']= $user->nom;
                $validated['disponible']= 'disponible';
                $validated['reseau']= 1;
                Joueur::create( $validated);
            }
            //$validated['owner_id']= $user->id();
            //$validated['prenom']= $user->prenom;
            //$validated['nom']= $user->id();
            //Joueur::create( $validated);
        //}

        dd($validated);
        //$user->save();
        //dd($user);
        return view("joueurs.create");
    }

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
