<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salle extends Model
{
    use HasFactory;
    protected $table = 'salles';
    protected $fillable = [
        'nom',
        'capacite',
        'type',
    ];
}
