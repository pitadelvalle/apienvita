<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vivo extends Model
{
    protected $table = 'vivos';
    protected $fillable = ['image','title','descripcion'];
}
