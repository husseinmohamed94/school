<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Row;
use App\Model\Classes;
use LaravelLocalization;
class RowsController extends Controller
{
         public function index(){
          //$Student= Student::all();
               // return view('students.index')->with('students',Student::all());
            //  'name_'.LaravelLocalization::getCurrentLocale().' as name',
        
                 $rows =    Row::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name')->get();
                return view('Rows.index',compact('rows'));
        
            }

         public function show($class_id){
              $classes = Row::with(['classes'=>function($q){
      // $q->select('id','name_'.LaravelLocalization::getCurrentLocale().' as name');
       }])->find($class_id);
   
         /*   $classes = Row::with(['classes' => function($q){
            $q->select('id','name_'.LaravelLocalization::getCurrentLocale().' as name');
         }])->find($class_id);

         return $classes;*/
//   $classes = Classes::select('name_'.LaravelLocalization::getCurrentLocale())->get();
 /* return   $rows =  Row::with(['classes'=>function($q){
           $q->select('id');
       }])->find($class_id);*/
      // $rows =    Row::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name')->get()->find($class_id);

      //   $classes =  Classes::find($class_id);

    //    $classes = Classes::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name')->get();
     //    $classes = $rows->classes;
    
  return view('Rows.show',compact('classes'));

}


            public function create(){
                return view('Rows.create');
            }

            public function store(Request $request){

      
                $request->validate([
                'name_ar'               =>'required',
                'name_en'               =>'required',
                
                ]);
       
              $Rows = Row::create([
               'name_ar'             =>$request->name_ar,
               'name_en'             =>$request->name_en,
    
              ]);
    
              session()->flash('success','tag create successfuly');
             
              return redirect(route('Rows.index'));
       
           }




           public function edit($row_id){
            $row = Row::find($row_id);
            if(!$row)
            return redirect()->back();
            //return redirect()->back();
        
            $row = Row::select('id','name_ar','name_en')->find($row_id);
            //return view('students.edit')->with('students',Student::all());
            return view('Rows.edit',compact('row'));
        
            return $row_id;
        }
        
        public function update(Request $request ,$row_id){
            $row = Row::find($row_id);
            if(!$row)
            return redirect()->back();
         
                 $request->validate([
                 'name_ar'         =>'required',
                 'name_en'         =>'required',
                
                 ]);
        
            /*   $row = Row::update([
                'name_ar'             =>$request->name_ar,
                'name_en'             =>$request->name_en
               ]);*/
               $row->update($request -> all());
               session()->flash('success','update  successfuly');
               return redirect(route('Rows.index'));
        }
        
        
            public function delete($row_id){
                $row = Row::find($row_id);
                if(!$row)
                return redirect()->back();
                $row->delete();
                return redirect(route('Rows.index'));
        
        
            }







}
