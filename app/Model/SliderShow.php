<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SliderShow extends Model
{
    protected  $table="slider_shows";
    protected $fillable = ['photo','title','details'];

    protected  $hidden =['created_at','updated_at'];
  //  public     $timestamps = true;

}
