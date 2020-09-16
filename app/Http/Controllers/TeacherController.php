<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Teacher;
use App\Traits\photoTrait;
use LaravelLocalization;

use  App\Http\Requests\TeacherRequest;
class TeacherController extends Controller
{    use photoTrait;

  public function index()
    {
      $teachers = Teacher::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name','email','mobile','University_'.LaravelLocalization::getCurrentLocale().' as University',
      'qualification_'.LaravelLocalization::getCurrentLocale().' as qualification','Customization_'.LaravelLocalization::getCurrentLocale().' as Customization','GraduationYear','Gender','photo')->get();
       
      
       return view('Teacher.index',compact('teachers'));
    }

    public function create()
    {
        return view('Teacher.create');
    }

   
    public function store(TeacherRequest $request)
    {
       


        $filephoto=$this->saveIamage($request->photo,'imgase/teacher');
      $teacher = Teacher::create([
        'name_ar'                        =>$request->name_ar,
        'name_en' 	                     =>$request->name_en,
        'email'                          =>$request->email,
        'mobile'                         =>$request->mobile,
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
      session()->flash('success',' create  techer successfuly');
      return redirect(route('teacher.index'));
   // return redirect()->back();
    }





    
}
