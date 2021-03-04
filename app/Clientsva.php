<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientsva extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'IDCLIENT',
        'CODECLIENT',
        'NOMCLIENT',
        'CONTACT',
        'NIVEAUCLIENT',
        'AUTREINFO',
        'login_client',
        'mdp_client'
    ];
    protected $table = 'clientsva';
}
