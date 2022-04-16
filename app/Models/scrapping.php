<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scrapping extends Model
{
    use HasFactory;
    protected $filable = ['busqueda_id', 'precio_m2', 'precio_viviendas', 'num_viviendas', 'num_restaurantes'];
}
