<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\SliderShow;
use App\Traits\photoTrait;
class SliderShowController extends Controller
{

    use photoTrait;
 
    public function __construct()
    {

    }
    public function index(){
        $sliders = SliderShow::all();
        return view('slider.index',compact('sliders'));
        
    }
    public function create(){
        return view('slider.create');
        
    }
    
    

 

    public function store(Request $request){

        $file_name = $this->saveIamage($request->name,'imgase/slider');

        
    
        $slider= SliderShow::create([
            'name'=>$file_name,
        ]);

    }

}
