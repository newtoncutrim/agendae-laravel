<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $table = 'adresses';

    protected $fillable = [
        'street',
        'number',
        'complement',
        'district',
        'city',
        'state',
        'country',
        'cep',
        'user_id'
    ];
}
