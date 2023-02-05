<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    //

    //
    public function registration(){
        return view('admin.studentregistration');
    }
      public function profile(){
        return view('admin.studentprofile');
    }
    
    
}
