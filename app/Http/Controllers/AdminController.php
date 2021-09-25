<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\StudentSelection;
use App\Models\Course;
use App\Models\TypesOfCourse;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $students = User::all()->count();
        $approved= StudentSelection::where('is_approved',1)->count();
        $course=Course::all()->count();
        $category=TypesOfCourse::all()->count();
        $recent=StudentSelection::latest('enroll_dt')->get();

        return view('admin.index',compact('students', 'approved', 'course','category', '$recent'));
    }
    
    public function totalStudents(){
        

    }

    
}
