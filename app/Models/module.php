<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_module',
        'nb_heure',
        'ens_id',
        'fil_id',
    ];
}
