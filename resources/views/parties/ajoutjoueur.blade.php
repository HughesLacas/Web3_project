@extends('layout')
@extends('layouts.app')

@section('contenue')

    <div class="col col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Inviter des joueurs</h4>
            </div>
            <form method="POST" action="">
                @csrf

                <div class="card-body">
                        @foreach($joueurs as $id=>$joueur )
                            @if(!$partie->joueurs->find($joueur))
                                <input type="checkbox" name="joueur_id[]" value="{{$joueur->id}}"> {{$joueur->prenom}}<br>
                            @endif

                    @endforeach

                    <button class="btn btn-success" name="notification" value="true" type="submit">envoyer</button>
                        <a class="btn btn-danger" href="{{action('JoueurController@profil')}}" role="button">Annuler</a>
                </div>

            </form>

        </div>
    </div>
@endsection
