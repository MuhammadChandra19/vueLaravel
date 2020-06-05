<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    //
    protected $casts = [
        'features' => 'string'
    ];
}
