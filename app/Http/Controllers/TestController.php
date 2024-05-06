<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Admin;
use App\Models\Professor;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function insertData() {


        $admin =  ['first_name' => 'Adam', 'last_name' => 'Clark', 'email' => 'admin@um5.ac.ma', 'password' => '00000000'];
        Admin::create($admin);
    }
}
