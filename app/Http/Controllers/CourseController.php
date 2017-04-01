<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request...

        $group = new \App\Course;

        $group->materie = $request->materie;

        $group->user_id = $request->user_id;

        $group->save();

        return redirect()->route('home');
    }
    public function create()
    {
        return view('course_create');
    }

}
