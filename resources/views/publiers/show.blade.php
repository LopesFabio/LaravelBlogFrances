@extends('layouts.app')

@section('content')
    <div class="header">
        <h1><b>Publication Détaillée</b> <br></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">N°.{{ $publier->id }} - {{ $publier->titre }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $publier->contenu }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr>
    <div class="box-header">
        <h1><b>Faire un Commentaire</b></h1>
    </div>
    <div class="box-body">
        @include('publiers.commentaires.commentaire')
    </div>

    <hr>
    <h3><b>Commentaires Faits ({{ $publier->commentaires->count() }})</b></h3>
    <div class="card-body">
        @forelse($publier->commentaires as $commentaire)
        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="width: 10px"><b>Titre: </b>{{ $commentaire->titre }}</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><b>Auteur: </b>{{ $commentaire->user->name }}</td>
            </tr>
            <tr>
                <td><b>Commentaire: </b><br>{{ $commentaire->commentaire }}</td>
            </tr>
            @empty

            @endforelse
            </tbody>
        </table>
    </div>
@endsection
