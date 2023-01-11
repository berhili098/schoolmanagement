<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class semestre extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_semestre',
        'date_debut',
        'date_fin',
    ];
}
