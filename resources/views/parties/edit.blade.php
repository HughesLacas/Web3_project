@extends('layout')
@extends('layouts.app')

@section('contenue')

    <div class="col col-lg-12">
        <div class="card">

            <div class="card-header">
                <h1>Modifier une partie</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    @method('PUT')
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
                    <button class="btn btn-success" type="submit">Mettre a jour</button>
                    <a class="btn btn-danger" href="{{action('JoueurController@profil')}}" role="button">Annuler</a>
                    @include('error')
                </form>
                <form method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-warning" type="ssubmit">Supprimer la partie</button>
                </form>
            </div>
        </div>








@endsection
