
@extends('layout')
@extends('layouts.app')

@section('contenue')
    <div class="row">
        <div class="ml-5 mb-5 col col-lg-3">
            <div class="card">
                <div class="card-header">
                    Accéder a votre profil
                </div>
                <div class="card-body">
                    <a href="{{action('JoueurController@profil')}}" class="btn btn-dark" role="button">Cliquer ici</a>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
    @foreach($joueurs as $joueur )



            <div class="ml-5 mb-5 col col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Profil de {{$joueur->prenom}}</h3>
                    </div>
                    <div class="card-body">

                        <div><span style="font-weight: bold">Il est actuellement:</span>
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
                    </div>
                </div>
            </div>


    @endforeach
    </div>

    @endsection
