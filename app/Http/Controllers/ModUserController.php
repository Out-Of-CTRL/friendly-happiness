<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModUserController extends Controller
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
    public function update(Request $request, $id)
    {
        // Validate the request...
        // $this->validate($request, [
        //    'date' => 'required|date_time',
        //]);


        //$group = \App\User;
        //$group = Auth::User();

        //group = $request->user()->id;

        $request->user()->id = $request->id;

        $request->user()->matricol = $request->matricol;

        $request->user()->password = $request->password;

        $request->user()->nume = $request->nume;

        $request->user()->prenume = $request->prenume;

        $request->user()->tata = $request->tata;

        $request->user()->mama = $request->mama;

        $request->user()->grupa = $request->grupa;

        $request->user()->sex = $request->sex;

        $request->user()->date_of_birth = $request->date_of_birth;

        $request->user()->save();

        return redirect()->route('profil');


        return redirect()->route('profil');
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

}
