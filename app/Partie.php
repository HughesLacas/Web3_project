<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partie extends Model
{
    //
    protected $guarded=[

    ];

    public function joueurs()
    {
        return $this->belongsToMany(Joueur::class);
    }
}
