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
       'row_id'              =>$request->row_id
    
      ]);
      session()->flash('success','tag create successfuly');
      //return redirect(route('student.indexcomposer require mcamara/laravel-localization'));
      return redirect(route('class.index'));

   }


}
