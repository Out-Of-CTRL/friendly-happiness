<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeController extends Controller
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
        // $this->validate($request, [
        //    'date' => 'required|date_time',
        //]);


        $group = new \App\Grades;

        $group->course_id = $request->course_id;

        $group->val = $request->val;

        $group->user_id = $request->user_id;

        $group->date = $request->date;

        $group->save();

        return redirect()->route('home');
    }

    public function index()
    {
        return view('grade_create');
    }

    public function create()
    {
        return view('grade_create');
    }

}
