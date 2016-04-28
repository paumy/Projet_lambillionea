<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $table = 'evenements';
    
    protected $fillable =[
        'idEvenement',  'titre', 'date', 'rue', 'numero', 'codePostal','localite','contact',
    ];
    
     public $timestamps = false;
}
