<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ropa extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        'foto',
        'tipo_ropa',
        'precio',
        'talla_id',
        'color_id',
        'temporada_id',
    ];

    public function color()
    {
        return $this->BelongsTo(Color::class);
    }

    public function talla()
    {
        return $this->BelongsTo(Talla::class);
    }

    public function temporada()
    {
        return $this->BelongsTo(Temporada::class);
    }

}
