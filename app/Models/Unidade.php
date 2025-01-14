<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'bairro',
        'cidade',
        'estado',
        'data',
    ];

    public function registro()
    {
        return $this->belongsToMany(Registro::class);
    }
}
