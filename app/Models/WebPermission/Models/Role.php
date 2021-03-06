<?php

namespace App\Models\WebPermission\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'full-access',
    ];

    public function users(){
        return $this->belongsToMany('App\Models\User')->withTimesTamps();
    }

    public function permissions(){
        return $this->belongsToMany('App\Models\WebPermission\Models\Permission')->withTimesTamps();
    }
}
