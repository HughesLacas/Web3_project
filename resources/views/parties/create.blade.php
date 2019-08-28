@extends('layout')
@extends('layouts.app')

@section('contenue')
    <div class="col col-lg-12">
        <div class="card">

            <div class="card-header">
                <h1>Création d'une partie</h1>
            </div>
            <div class="card-body">
            <form method="POST" action="/parties">
                @csrf


                <div class="control">
                    <div>
                        <select name="type">
                            <option value="Reseau">Reseau</option>
                            <option value="Double">Double</option>
                            <option value="DoubleOpen">Double Open</option>
                        </select>
                        <input type="date" name="date">
                    </div>



                </div>
                <button class="btn btn-success"  type="submit">envoyer</button>
                <a class="btn btn-danger" href="/joueurs/profil" role="button">Annuler</a>
                @include('error')
            </form>
        </div>
    </div>



@endsection
