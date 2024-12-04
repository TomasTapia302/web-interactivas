<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $fillable = ['id_articulo', 'id_user', 'cantidad', 'precio'];

    public function articulo()
    {
        return $this->belongsTo(articulos::class, 'id_articulo');
    }
}
