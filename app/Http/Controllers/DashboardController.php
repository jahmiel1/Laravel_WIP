<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        return view("auth.dashboard");

    }
    public function course_selection() {
        return view("course_selection");
    }
}
