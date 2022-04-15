<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class busqueda extends Model
{
    use HasFactory;
    protected $filable = ['query', 'usuario_id', 'fecha_inicio', 'fecha_fin', 'fecha_busqueda_realizada'];
}
