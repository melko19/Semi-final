<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::get();
        return view('courses.index',['courses'=>$courses]);
    }
    public function create(){
        return view('courses.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'start'=>'required',
            'end'=>'required'
        ]);

        Course::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'start' => $request['start'],
            'end' => ($request['end']),

        ]);

        return redirect('/courses');
    }
}
