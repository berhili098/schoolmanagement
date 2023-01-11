<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rattrapage extends Model
{
    use HasFactory;
    protected $table = 'rattrapages';
    protected $fillable = [
        'date',
        'salle_id',
        'groupe_id',
        'module_id'
    ];

    public function salle()
    {
        return $this->belongsTo(salle::class, 'salle_id');
    }

    public function groupe()
    {
        return $this->belongsTo(Groupe::class, 'groupe_id');
    }

    public function module()
    {
        return $this->belongsTo(module::class, 'module_id');
    }







}
