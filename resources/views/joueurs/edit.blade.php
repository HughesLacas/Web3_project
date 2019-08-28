@extends('layout')
@extends('layouts.app')

@section('contenue')


    <div class="col col-lg-12">
        <div class="card">

            <div class="card-header">
                <h1>Éditer votre profil Joueur</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="/joueurs/{{$joueur->id}}">
                    @method('PATCH')
                    @csrf
                    <div class="field">
                        <label class="label" for="disponible">disponible</label>

                        <div class="control">
                            <div>
                                <select name="disponible">
                                    <option value="Disponible">Disponible</option>
                                    <option value="Vacance">Vacance</option>
                                    <option value="Blessé">Blessé</option>
                                </select>
                                <div>
                                    <input type="hidden" name="reseau" value="0">
                                    <input type="checkbox" name="reseau" value="1" {{($joueur->reseau)?'checked="checked"':''}}> Réseau<br>


                                    <input type="hidden" name="double" value="0">
                                    <input type="checkbox" name="double" value="1" {{($joueur->double)?'checked="checked"':''}}> Double<br>


                                    <input type="hidden" name="doubleopen" value="0">
                                    <input type="checkbox" name="doubleopen" value="1" {{($joueur->doubleopen)?'checked="checked"':''}}> Double Open<br>
                                </div>

                            </div>

                        </div>
                    </div>

                    <button class="btn btn-success" type="submit">update</button>
                    <a class="btn btn-danger" href="{{action('JoueurController@profil')}}" role="button">Annuler</a>
                </form>
            </div>
        </div>




@endsection
