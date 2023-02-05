<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentPayments extends Controller
{
    public function index(){
        return view('admin.payments');
    }
}
