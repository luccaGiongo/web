<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [
        'nome', 'siape','email', 'link_lattes','curso',
    ];
}
