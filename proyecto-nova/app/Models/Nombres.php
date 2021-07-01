<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Fields\BelongsTo;

class Nombres extends Model
{
    use HasFactory;

    protected $table = 'nombres';
    // public function nombre(){
    //     return $this->belongsTo(User::class);
    // }
    protected $fillable = [
        'id',
        'nombre',
        'user_id',
        'active'
    ];


    //RELACION ENTRE LA TABLA DE USUARIO Y LA TABLA PELICULAS SE MANDA A LLAMAR ESTA FUNCION
    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
