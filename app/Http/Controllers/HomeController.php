<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SliderShow;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // return view('home');
        $sliders = SliderShow::all();
        return view('home',compact('sliders'));
       // return view('slider.index',compact('sliders'));
        
    }
}
