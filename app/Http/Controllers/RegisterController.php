<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function index(){

        $search = request('search');

        if($search){
            $registers = Register::where([
                ['name', 'like', '%'.$search.'%']

            ])->get();
        }else{
            $registers = Register::all();
        }

        return view('welcome',['registers' => $registers, 'search' => $search]);
    }

    public function create(){
        return view('registers.create');
    }

    public function store(Request $request){

        $register = new Register;

        $register->name = $request->name;
        $register->email = $request->email;
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

        $user = auth()->user();
        $register->user_id = $user->id;

        $register->save();

        return redirect('/')->with('msg', 'Cadastro criado com sucesso!');

    }

    public function show($id){
        $register = Register::findOrFail($id);

        return view('registers.show', ['register' => $register]);
    }

    public function dashboard(){
        $user = auth()->user();
        $registers = $user->registers;

        return view('registers.dashboard', ['registers' => $registers]);
    }

    public function destroy($id){
        Register::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Usuário excluído!');
    }
}
