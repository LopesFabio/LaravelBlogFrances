<?php

namespace App\Http\Controllers\Publiers;

use Illuminate\Http\Request;
use App\Notifications\PublicationCommentee;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentaireFormRequest;

class commentaireController extends Controller
{
    public function store(StoreCommentaireFormRequest $request)
    {
        $commentaire = $request->user()->commentaires()->create($request->all());

        $auteur = $commentaire->publier->user;
        $auteur->notify(new PublicationCommentee($commentaire));

        return redirect()->route('publiers.show', $commentaire->publier_id)->withSuccess('Commenté avec succès');

    }
}
