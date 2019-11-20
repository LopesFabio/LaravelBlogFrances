<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class commentaire extends Model
{
    protected $fillable = ['user_id', 'publier_id', 'titre', 'commentaire'];

    public function publier()
    {
        return $this->belongsTo(Publier::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
