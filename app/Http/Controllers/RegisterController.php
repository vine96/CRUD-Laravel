<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function index(){

        $registers = Register::all();

        return view('welcome',['registers' => $registers]);
    }

    public function create(){
        return view('registers.create');
    }

    public function store(Request $request){

        $register = new Register;

        $register->name = $request->name;
        $register->email = $request->email;
        $register->pass = $request->pass;
        $register->zip = $request->zip;
        $register->state = $request->state;
        $register->city = $request->city;

        $register->save();

        return redirect('/');

    }
}
