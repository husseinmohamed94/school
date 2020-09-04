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
         $students =    Student::all();
        return view('students.index',compact('students'));

    }
    public function create(){
        return view('students.create');
    }

    public function store(Request $request){

      
         $request->validate([
         'name'         =>'required',
         'email'        =>'required|unique:students|max:255|email',
         'mobile'       =>'required',
         'Mothername'   => 'required',
         'Address'      =>'required',
         ]);

       $Student = Student::create([
        'name'          =>$request->name,
        'email'         =>$request->email,
        'mobile'        =>$request->mobile,
        'Mothername'     =>$request->Mothername,
        'Address'       =>$request->Address
       ]);
       session()->flash('success','tag create successfuly');
       return redirect(route('student.indexcomposer require mcamara/laravel-localization
       '));
    }


public function edit($student_id){
    $student = Student::find($student_id);
    if(!$student)
    return redirect()->back();
    //return redirect()->back();

    $student = Student::select('id','name','email','mobile','Mothername','Address')->find($student_id);
    //return view('students.edit')->with('students',Student::all());
    return view('students.edit',compact('student'));

    return $student_id;
}

public function update(Request $request ,$student_id){
    $student = Student::find($student_id);
    if(!$student)
    return redirect()->back();
    $request->validate([
        'name'         =>'required',
        'email'        =>'required|max:255|email',
        'mobile'       =>'required',
        'Mothername'   => 'required',
        'Address'      =>'required',
        ]);

      $student->update([
       'name'          =>$request->name,
       'email'         =>$request->email,
       'mobile'        =>$request->mobile,
       'Mothername'     =>$request->Mothername,
       'Address'       =>$request->Address
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
