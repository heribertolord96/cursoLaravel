<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "rol";
    protected $fillable = ['nombre']; //campos que se pueden crear masivamente, para evitar intrusiones externas
    protected $guarded = ['id']; //laravel no lo deja modificar, para evitar intrusiones externas
}
