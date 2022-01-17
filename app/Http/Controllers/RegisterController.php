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

        //Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/registers'), $imageName);
            $register->image = $imageName;

        }

        $register->save();

        return redirect('/')->with('msg', 'Cadastro criado com sucesso!');

    }

    public function show($id){
        $register = Register::findOrFail($id);

        return view('registers.show', ['register' => $register]);
    }
}
