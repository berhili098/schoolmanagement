<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    protected $table = 'groupes';
    protected $fillable = [
        'fi_id',
        'en_id',
        'section',
        'type'
    ];


    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'fi_id');
    }

    public function enseignant()
    {
        return $this->belongsTo(User::class, 'en_id');
    }
}
