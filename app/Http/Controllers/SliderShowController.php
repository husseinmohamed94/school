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
            $request->validate([
                'photo' => 'required|image',
                'title' =>'nullable',
                'details' =>'nullable',
                
                ]);

        $file_name = $this->saveIamage($request->photo,'imgase/slider');
        $slider= SliderShow::create([
            'photo'=>$file_name,
            'title' =>$request->title,
            'details'=>$request->details
        ]);

        session()->flash('success','create add success') ;
        return redirect()->back();

    }

}
