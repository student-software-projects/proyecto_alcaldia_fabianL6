<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $primaryKey='id';
    protected $table='jugadores';
    protected $fillable=[
        'nombre', 'apellido', 'numero_camisa', 'apodo', 'equipos_id'
    ];

    public function equipos(){
        return $this->belongsTo(Equipo::class);
    }
}
