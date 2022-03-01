<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recetas extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'slug','ingredientes', 'elaboracion', 'extract', 'sunrise', 'image', 'video', 'visible', 'categoria_id'];
    public function categoria(){
        return $this->belongsTo('App\Models\Categorias');
    }
}