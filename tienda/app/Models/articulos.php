<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articulos extends Model
{
    use HasFactory;

    protected $table = 'articulos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'inventario',
        'tipo',
        'id_vendedor',
        'url_imagen',
    ];
}