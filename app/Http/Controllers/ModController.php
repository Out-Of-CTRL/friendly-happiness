<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModController extends Controller
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

        $group = new \App\Mods;

        $group->user_id = $request->user_id;

        $group->grupa = $request->grupa;
        

        $group->save();

        return redirect()->route('felicitari');
    }
    public function create()
    {
        return view('mod_create');
    }

    public function index()
    {
        return view('mod_create');
    }

}
