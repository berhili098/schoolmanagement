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
        'sal_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'ens_id');
    }
    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'fil_id');
    }
    public function salle()
    {
        return $this->belongsTo(salle::class, 'sal_id');
    }
}
