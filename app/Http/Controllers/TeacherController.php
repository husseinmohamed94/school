<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Teacher;
use App\Traits\photoTrait;
use  App\Http\Requests\TeacherRequest;
class TeacherController extends Controller
{    use photoTrait;

    public function create()
    {
        return view('Teacher.create');
    }

   
    public function store(TeacherRequest $request)
    {
       /* $request->validate([
            'name_ar'                       =>'required',
            'name_en'                      =>'required',
            'University_ar'                =>'required',
            'University_en'                =>'required',
            'qualification_ar'             => 'required',
            'qualification_en'             => 'required',
            'Customization_ar'            =>'required',
            'Customization_en'            =>'required',
            'GraduationYear'              =>'date',
            'Gender'                      =>'required',
            'photo'                      =>'required|image'
            ]);*/


        $filephoto=$this->saveIamage($request->photo,'imgase/slider');
      $teacher = Teacher::create([
        'name_ar'                        =>$request->name_ar,
        'name_en' 	                     =>$request->name_en,
        'University_ar'                  => $request->University_ar,
        'University_en'                  => $request->University_en,
        'qualification_ar'               =>$request->qualification_ar,
        'qualification_en' 	             =>$request->qualification_en,
        'Customization_ar'               => $request->Customization_ar,
        'Customization_en'               => $request->Customization_en,
        'GraduationYear'                 => $request->GraduationYear,
        'Gender'                         => $request->Gender, 
        'photo'                          => $filephoto,
    
      ]);
      session()->flash('success','tag create successfuly');
      return redirect(route('student.index'));
    }





    
}
