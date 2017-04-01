<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
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


        $group = new \App\Event;

        $group->course_id = $request->course_id;

        ////////$group->date = $request->date;

        $group->date = $request->date;

        $group->hour = $request->hour;

        $group->room_id = $request->room_id;

        $group->title = $request->title;

        $group->description = $request->description;

        $group->type = $request->type;

        $group->save();

        return redirect()->route('home');
    }
    public function create()
    {
        return view('event_create');
    }

}
