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
}
