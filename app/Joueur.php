<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    public $services=['reseau'=>'Réseau','double'=>'Double','doubleopen'=>'Double Open'];
    protected $guarded=[

    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function parties()
    {
        return $this->belongsToMany(Partie::class);
    }


   /* public function addTask($task){
        $this->tasks()->create($task);

        /* Task::created([
            'project_id'=>$this->id,
            'description'=>$description,
        ]);
    }*/
}
