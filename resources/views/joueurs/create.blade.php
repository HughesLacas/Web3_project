@extends('layout')
@extends('layouts.app')

@section('contenue')
    <div class="card d-flex justify-content-center">
        <div class="card-header"><h1>Création du profil Joueur</h1></div>
        <div class="card-body">
            <form method="POST" action="/joueurs">
                @csrf
                <div>
                    <input type="text" name="prenom" style="background-color: {{$errors->has('title') ? 'red' : ''}}" placeholder="prenom" value='{{ Auth::user()->prenom }}' "disabled" >
                </div>

                <div>
                    <input type="text" name="nom" style="background-color: {{$errors->has('title') ? 'red' : ''}}" placeholder="nom" value='{{ Auth::user()->nom }}' "disabled" >
                </div>
                <div class="control">
                    <div>
                        <select name="disponible">
                            <option value="Disponible">Disponible</option>
                            <option value="Vacance">Vacance</option>
                            <option value="Blessé">Blessé</option>
                        </select>
                        <div>
                            <input type="hidden" name="reseau" value="0">
                            <input type="checkbox" name="reseau" value="1"> Réseau<br>

                            <input type="hidden" name="double" value="0">
                            <input type="checkbox" name="double" value="1"> Double<br>


                            <input type="hidden" name="doubleopen" value="0">
                            <input type="checkbox" name="doubleopen" value="1"> Double Open<br>
                        </div>

                    </div>

                </div>
                <button class="btn btn-success" type="submit">envoyer</button>
                <a class="btn btn-danger" href="/joueurs" role="button">Annuler</a>
                @include('error')
            </form>
        </div>



    </div>

@endsection
