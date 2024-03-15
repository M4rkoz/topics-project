<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'jugador';
    protected $primaryKey = 'ci';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'ci', 'nombre', 'telefono', 'email',
    ];
}
