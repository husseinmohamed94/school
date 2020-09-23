<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected  $table="students";

    protected $fillable = ['name_ar','name_en','email','mobile','Mothername_ar','Mothername_en','Address_ar','Address_en','Gender','row_id'];






    public function rows(){
        return $this->belongsTo('App\Model\Row','row_id','id');
    }
    
}
