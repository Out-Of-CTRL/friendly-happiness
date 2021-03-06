<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
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
            'nume' => 'required|unique:groups',
        ]);

        $group = new \App\Group;

        $group->nume = $request->nume;

        $group->save();

        return redirect()->route('home');
    }
    public function create()
    {
        return view('group_create');
    }

}
