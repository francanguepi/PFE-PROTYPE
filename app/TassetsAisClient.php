<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TassetsAisClient extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'idaisclient';
    protected $fillable = [
        'idaisclient',
        'refasset',
        'refclient',
        'status',
    ];
    protected $table = 'tassets_ais_client';
}
