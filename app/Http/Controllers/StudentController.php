<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\student;

class StudentController extends Controller
{

    
    public function index(Request $request): View{


        $students=student::all();

       
        return view('teacher.Liststudent',compact('students'));
       
      

    }
      /**
     * Store a new user.
     *
    * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
    //
    $name = $request->get('name');
    $phone = $request->get('phone');
    $email = $request->get('email');
    $course = $request->get('course');

    $student= new student();

    $student->name=$name;
    $student->phone=$phone;
    $student->email=$email;
    $student->course=$course;

    $student->save();
    return view('inscrit');
    }

}
