<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recetas extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','ingredientes','descripcion','chef','destacada'];

    protected $casts = [
        'ingredientes' => 'array',
        'destacada' => 'boolean',
    ]; // esto permite que Laravel lo trate como array

    public function scopeDestacadas($query)
    {
        return $query->where('destacada', true);
    }
}
