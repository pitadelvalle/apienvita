<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asociacione extends Model
{
    protected $table = 'asociaciones';
    protected $fillable =['title','descripcion'];
    
}
