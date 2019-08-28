@extends('layout')
@extends('layouts.app')


    @section('content')


        @foreach($joueurs as $joueur )

    <div class="row">

            <div class="ml-5 col col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h3>Profil de <a href="/joueurs/{{$joueur->id}}/edit" style="color:#000">{{$joueur->prenom}}</a></h3>
                    </div>
                    <div class="card-body">
                        <a href="/joueurs/{{$joueur->id}}/edit" >Éditer votre profile</a>
                        <div><span style="font-weight: bold">Vous êtes actuellement:</span>
                            <div>{{$joueur->disponible}}</div>
                        </div>
                        <div>
                            <span style="font-weight: bold">Service</span>
                            <ul>
                                @foreach($joueur->services as $champ=>$etiquette)
                                    @if($joueur->$champ)
                                        <li>
                                            {{$etiquette}}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <a href="{{action('PartieController@create')}}" class="btn btn-dark" role="button">Créer une partie</a>
                    </div>
                </div>
            </div>


        <div class="col col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Vos parties</h3>
                </div>
                <div class="card-body">
                    <ul>
                        @if(!$joueur->parties->isEmpty())
                            @foreach($joueur->parties as $partie)
                                <li>
                                    Partie de type {{$partie->type}} qui aura lieux le : <a href="{{action('PartieController@edit',$partie)}}">{{$partie->date}}</a>
                                    <ul>
                                        @foreach($partie->joueurs as $joueur)
                                            <li>{{$joueur->prenom}}</li>
                                        @endforeach
                                    </ul>
                                    <a href="{{action('PartieController@ajoutjoueur',$partie)}}">Ajouter Un Joueur </a>
                                </li>

                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>

    </div>
        @endforeach
        <div class="row">
            <div class="ml-5 mt-5 col col-lg-3">
                <div class="card">
                    <div class="card-header">
                        Retourner à l'accueil
                    </div>
                    <div class="card-body">
                        <a href="{{action('JoueurController@index')}}" class="btn btn-dark" role="button">Cliquer ici</a>
                    </div>

                </div>
            </div>
        </div>
@endsection

