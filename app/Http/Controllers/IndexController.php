<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;

class IndexController extends Controller
{
    public function index() {

        $about = about::find(1);
        return view('welcome',compact('about'));
       
       
    }
    //
}
