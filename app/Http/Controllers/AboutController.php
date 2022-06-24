<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\about;
use Illuminate\View\View;

class AboutController extends Controller
{

    
    public function index(){
        return view('teacher.AddAbout');
    }
      /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
       $about=about::find(1);
       if($about===null){
        $about= new about();

       }
        $content = $request->get('content');
        $about->content=$content;
        $about->save();
        return view('teacher.AddAbout');
 
        //
    }

    public function afficher(){
        $about=about::find(1);
        return view ('about',compact('about'));
       
       
    }
    
    
}
