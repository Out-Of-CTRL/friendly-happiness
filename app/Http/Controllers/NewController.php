<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
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

        $group = new \App\News;

        $group->titlu = $request->titlu;

        $group->link_imagine = $request->link_imagine;

        $group->text = $request->text;
        

        $group->save();

        return redirect()->route('felicitari');
    }
    public function create()
    {
        return view('new_create');
    }

    public function index()
    {
        return view('new_create');
    }

}
