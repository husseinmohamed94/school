<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Row;
use App\Model\Classes;

use LaravelLocalization;

class ClasssController extends Controller
{
    public function index(){
        $classes = Classes::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name')->get();
        $rows = Row::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name')->get();
        return view('class.index',compact('classes','rows'));
            }

    public function create(){
      $rows = Row::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name')->get();
        return view('class.create',compact('rows'));
    }

    public function store(Request $request){

      
        $request->validate([
        'name_ar'               =>'required',
        'name_en'               =>'required',
        'row_id'                =>'required'
        
        ]);

      $Classe = Classes::create([
       'name_ar'             =>$request->name_ar,
       'name_en'             =>$request->name_en,
       'row_id'              =>$request->row_id,
    
      ]);
      session()->flash('success','tag create successfuly');
      //return redirect(route('student.indexcomposer require mcamara/laravel-localization'));
      return redirect(route('class.index'));

   }


   public function edit($class_id){
    $classes = Classes::find($class_id);
    if(!$classes)
    return redirect()->back();
    //return redirect()->back();
    $rows   = Row::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name')->get();

    //$rows   = Row::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name')->get();
   // $classes = Classes::select('id','name_ar','name_en','row_id')->find($class_id);
    $classes = Classes::find($class_id);
    //return view('students.edit')->with('students',Student::all());
    return view('class.edit',compact('classes','rows'));

    return $class_id;
}

public function update(Request $request ,$class_id){
    $classes = Classes::find($class_id);
    if(!$classes)
    return redirect()->back();
 
         $request->validate([
         'name_ar'         =>'required',
         'name_en'         =>'required',
         'row_id'          =>'required',

        
         ]);

    /*   $row = Row::update([
        'name_ar'             =>$request->name_ar,
        'name_en'             =>$request->name_en
       ]);*/
       $classes->update($request -> all());
       session()->flash('success','update  successfuly');
       return redirect(route('class.index'));
}


    public function delete($class_id){
        $Classes = Classes::find($class_id);
        if(!$Classes)
        return redirect()->back();
        $Classes->delete();
        return redirect(route('class.index'));


    }
   

}
