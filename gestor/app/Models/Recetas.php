<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recetas extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','ingredientes','descripcion','chef'];

    protected $casts = ['ingredientes'=>'array']; // esto permite que Laravel lo trate como array
}
