<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
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
        $this->validate($request, [
            'nume' => 'required|unique:rooms',
        ]);

        $group = new \App\Room;

        $group->nume = $request->nume;

        $group->save();

        return redirect()->route('home');
    }
    public function create()
    {
        return view('room_create');
    }

}
