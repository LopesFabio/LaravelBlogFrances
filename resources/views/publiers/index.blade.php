@extends('layouts.app')

@section('content')

    <div class= box-header>
        <h1><b>Liste de publications</b> <br></h1>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="width: 10px">N#</th>
                <th>Titre de la publication</th>
                <th style="width: 40px">action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($publier as $publiers)
                <tr>
                    <td>{{ $publiers->id }}°</td>
                    <td>{{ $publiers->titre }}</td>
                    <td><a href="{{route('publiers.show', $publiers->id)}}"><span class="btn btn-info">Voir</span></a></td>
                </tr>
            @empty
                <tr>
                    <td>X</td>
                    <td>Aucun post trouvé</td>
                    <td>aucune action disponible</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $publier->links() }}
    </div>
@endsection