<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Row extends Model
{
    protected  $table="rows";
    protected $fillable = ['name_ar','name_en'];

    protected  $hidden =['created_at','updated_at'];
  //  public     $timestamps = true;

  public function classes(){
   return $this->hasMany('App\Model\Classes','row_id','id');
  }



public function students(){
  return $this->hasMany('App\Model\Student','row_id','id');
}



}
