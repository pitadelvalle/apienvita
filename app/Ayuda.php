<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayuda extends Model
{
    protected $table = 'ayudas';
    protected $fillable =['title','descripcion'];
}
