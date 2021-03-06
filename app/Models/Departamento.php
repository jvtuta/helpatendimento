<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'nome_departamento'
    ];

    public function users() {
        return $this->hasMany('App\Models\User', 'id_departamento');
    }
}
