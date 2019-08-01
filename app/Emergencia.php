<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergencia extends Model
{
    protected $table = 'emergencias';
    protected $fillable = ['image','title','descripcion'];
}
