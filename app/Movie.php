<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded =[];
    //protected $fillable=[]; contrario al guarded lo que no quiere se toque. Guarded lo que quiero que se modifique

}
