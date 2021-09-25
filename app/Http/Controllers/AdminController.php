<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function course(){
        return view('admin.course');
    }
    public function courseType(){
        return view('admin.courseType');
    }
    public function courseSelection(){
        return view('admin.courseSelection');
    }
}
