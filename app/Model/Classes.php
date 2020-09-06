<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected  $table="classes";
    protected $fillable = ['name_ar','name_en','row_id'];

    protected  $hidden =['created_at','updated_at'];
  //  public     $timestamps = true;

  public function rows(){

   $this->belongsTo('App\Model\Row','row_id','id');
  }


}
