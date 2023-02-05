<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OApplication extends Controller
{
    //
    public function index(){
        return view('admin.oapplication');
    }
}
