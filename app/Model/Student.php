<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name_ar','name_en','email','mobile','Mothername_ar','Mothername_en','Address_ar','Address_en'];

}
