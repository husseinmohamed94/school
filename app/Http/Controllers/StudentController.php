<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Model\Student;
use LaravelLocalization;
class StudentController extends Controller
{

    public function index(){
//$Student= Student::all();
       // return view('students.index')->with('students',Student::all());
    //  'name_'.LaravelLocalization::getCurrentLocale().' as name',

         $students =    Student::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name','email','mobile',
         'Mothername_'.LaravelLocalization::getCurrentLocale().' as Mothername','Address_'.LaravelLocalization::getCurrentLocale().' as adderss')->get();
        return view('students.index',compact('students'));

    }
    public function create(){
        return view('students.create');
    }

    public function store(Request $request){

      
         $request->validate([
         'name_ar'               =>'required',
         'name_en'               =>'required',
         'email'                 =>'required|unique:students|max:25mail',
         'mobile'                =>'required',
         'Mothername_ar'         => 'required',
         'Mothername_en'         => 'required',
         'Address_ar'            =>'required',
         'Address_en'            =>'required',
         ]);

       $Student = Student::create([
        'name_ar'             =>$request->name_ar,
        'name_en'             =>$request->name_en,
        'email'               =>$request->email,
        'mobile'              =>$request->mobile,
        'Mothername_ar'       =>$request->Mothername_ar,
        'Mothername_en'       =>$request->Mothername_en,
        'Address_ar'          =>$request->Address_ar,
        'Address_en'          =>$request->Address_en,

       ]);
       session()->flash('success','tag create successfuly');
       //return redirect(route('student.indexcomposer require mcamara/laravel-localization'));
       return redirect(route('student.index'));

    }


public function edit($student_id){
    $student = Student::find($student_id);
    if(!$student)
    return redirect()->back();
    //return redirect()->back();

    $student = Student::select('id','name_ar','name_en','email','mobile','Mothername_ar','Mothername_en','Address_ar','Address_en')->find($student_id);
    //return view('students.edit')->with('students',Student::all());
    return view('students.edit',compact('student'));

    return $student_id;
}

public function update(Request $request ,$student_id){
    $student = Student::find($student_id);
    if(!$student)
    return redirect()->back();
 


         $request->validate([
         'name_ar'         =>'required',
         'name_en'         =>'required',
         'email'        =>'required|unique:students|max:25mail',
         'mobile'       =>'required',
         'Mothername_ar'   => 'required',
         'Mothername_en'   => 'required',
         'Address_ar'      =>'required',
         'Address_en'      =>'required',
         ]);

       $Student = Student::update([
        'name_ar'             =>$request->name_ar,
        'name_en'             =>$request->name_en,
        'email'               =>$request->email,
        'mobile'              =>$request->mobile,
        'Mothername_ar'       =>$request->Mothername_ar,
        'Mothername_en'       =>$request->Mothername_en,
        'Address_ar'          =>$request->Address_ar,
        'Address_en'          =>$request->Address_en,

       ]);
 session()->flash('success','update  successfuly');
       return redirect(route('student.index'));
}


    public function delete($student_id){
        $student = Student::find($student_id);
        if(!$student)
        return redirect()->back();
        $student->delete();
        return redirect(route('student.index'));


    }

}
