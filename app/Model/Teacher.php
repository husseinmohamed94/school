<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected  $table="teachers";

     	 	 	 	 	 	 	 	 	 	 	
    protected $fillable = ['name_ar','name_en','email','mobile','University_ar','University_en','qualification_ar','qualification_en','Customization_ar','Customization_en','GraduationYear','Gender','photo'];

    protected  $hidden =['created_at','updated_at'];
  //  public     $timestamps = true;
}
