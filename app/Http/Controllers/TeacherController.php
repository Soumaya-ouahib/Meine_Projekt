<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Teacher;



class TeacherController extends Controller
{

    public function index(Request $request): View{


        $teachers=Teacher::all();

       
        return view('teacher.Listteacher',compact('teachers'));
       
      

    }
    
    public function afficher(Request $request): View{


        $teachers=Teacher::all();

       
        return view('welcome',compact('teachers'));
       
      

    }
    public function afficher2(Request $request): View{


        $teachers=Teacher::all();

       
        return view('teacher',compact('teachers'));
       
    }
    
   
   
       /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
       
       
        if($request->has('image')){
            $file=$request->image;
            $image_name=time().'_'. $file->getClientOriginalName();
            $file->move(public_path('teacherimg'),$image_name);
           
        }
       
       // $pic = $request->get('image');
       
        $name = $request->get('name');
        $kurs = $request->get('kurs');
        $phone = $request->get('phone');

        $teacher= new Teacher();

        $teacher->pic=$image_name;
        $teacher->name=$name;
        $teacher->kurs=$kurs;
        $teacher->phone=$phone;

        $teacher->save();
        return view('dashboard');
 
        //
    }

    public function loschen($name){
        Teacher::find($name)->delete();
        return redirect('/Listteacher');

    }
    
}
