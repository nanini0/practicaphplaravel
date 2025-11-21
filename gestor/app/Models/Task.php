<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    // ¡IMPORTANTE!
    // $fillable indica qué campos tienen permiso de ser guardados masivamente.
    // Protege tu base de datos de usuarios malintencionados que intenten inyectar datos en columnas protegidas (como is_admin).
    
   
    protected $fillable = ['title','description','is_completed'];
}
