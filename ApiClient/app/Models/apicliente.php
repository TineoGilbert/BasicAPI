<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apicliente extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'Cedula', 'Telefono'];
}
