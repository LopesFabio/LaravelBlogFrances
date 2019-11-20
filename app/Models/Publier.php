<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publier extends Model
{
    protected $fillable = ['user_id', 'titre', 'contenu'];

    public function commentaires()
    {
        return $this->hasMany(commentaire::class);
    }

    //auteur de la publication
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
