<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Model\Student;
use LaravelLocalization;
use  App\Model\Row;
use Illuminate\Support\Facades\DB;
use App\Model\Classes;

class StudentController extends Controller
{

    public function index(){
//$Student= Student::all();
        // view('students.index')->with('students',Student::all());
    //  'name_'.LaravelLocalization::getCurrentLocale().' as name',

     /*   $students = Student::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name','email','mobile',
         'Mothername_'.LaravelLocalization::getCurrentLocale().' as Mothername','Address_'.LaravelLocalization::getCurrentLocale().' as adderss','Gender','row_id')->get();
         //$rows = Row::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name')->get();*/
         $students =  Student::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name','email','mobile',
         'Mothername_'.LaravelLocalization::getCurrentLocale().' as Mothername','Address_'.LaravelLocalization::getCurrentLocale().' as adderss','Gender','row_id')->with(['rows' => function($q){
            $q->select('id','name_'.LaravelLocalization::getCurrentLocale().' as name');
         }])->get();
  
    return view('students.index',compact('students'));

    }
    public function create(){
     $rows = Row::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name')->get();
     /*  // $classes = Classes::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name')->get();
      $data = DB::table('Row')->get()->toArray();
      echo "<per>";
      print_r($data);
*/
       // $user = DB::table('Student')->join('')
        return view('students.create',compact('rows'));
    }

    /*public function findclass($id){
            $rows = Row::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name')->get();
        $classes = Classes::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name')->get();
            $classes = DB::table('rows')
            ->join('classes','row_id',"=","row_id")
            ->get()->toArray();
            
            // $user = DB::table('Student')->join('')
            $data=Classes::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name')->where('row_id',$request->id)->take(100)->get();
            return  response()->json($data);
        //    return view('students.create',compact('rows'));
                    echo json_encode(DB::table('classes')->where('row_id',$id)->get());

       }
   */


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
         'Gender'                =>'required',
         'row_id'                =>'required',
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
        'Gender'              =>$request->Gender,
        'row_id'              =>$request->row_id,

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
    

   $student = Student::select('id','name_ar','name_en','email','mobile','Mothername_ar','Mothername_en','Address_ar','Address_en','Gender','row_id')->find($student_id);
    /*//return view('students.edit')->with('students',Student::all());1

  $student=  Student::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name','email','mobile',
         'Mothername_'.LaravelLocalization::getCurrentLocale().' as Mothername','Address_'.LaravelLocalization::getCurrentLocale().' as adderss','Gender','row_id')->with(['rows' => function($q){
            $q->select('id','name_'.LaravelLocalization::getCurrentLocale().' as name');
         }])->find($student_id);*/

      $rows = Row::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name')->get();
     return view('students.edit',compact('student','rows'));
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
         'Gender'          =>'required', 
         'row_id'                =>'required',

         ]);

      /* $Student = Student::update([
        'name_ar'             =>$request->name_ar,
        'name_en'             =>$request->name_en,
        'email'               =>$request->email,
        'mobile'              =>$request->mobile,
        'Mothername_ar'       =>$request->Mothername_ar,
        'Mothername_en'       =>$request->Mothername_en,
        'Address_ar'          =>$request->Address_ar,
        'Address_en'          =>$request->Address_en,

       ]);*/
                      $student->update($request -> all());

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
