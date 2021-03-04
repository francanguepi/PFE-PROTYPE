<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ais extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_ais',
        'coordonnees_gps',
        'etat',
        'code_client',

    ];
}
