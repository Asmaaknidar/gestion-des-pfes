<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showprofilstudent(){
        return view('student.profilstudent');
    }
   
}
