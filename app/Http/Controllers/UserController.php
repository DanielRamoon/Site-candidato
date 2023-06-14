<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $dados = User::get();
        return view('admin.usuario.index', compact('dados'));
    }

    public function create(){
        return view('admin.usuario.create');
    }

    public function store(Request $request){
        $dados = New User;
        $dados->fill($request->all()); 
        $dados->password = bcrypt($dados->password);
        $dados->save();
        return redirect('/usuario');
    }

    public function edit($user_id){
        $dados = User::where('id', $user_id)->first();
        return view('admin.usuario.edit', compact('dados'));
    }

    public function update(Request $request, $user_id){
        $dados = User::where('id', $user_id)->first();
        $old_password = $dados->password;
        $dados->fill($request->all()); 
        if(isset($request->password)){
            $dados->password = bcrypt($request->password);
        }else{
            $dados->password = $old_password;
        }
        $dados->save();
        return redirect('/usuario');
    }

    public function delete($id){
        $dados = User::where('id', $id)->first();
        $dados->delete();
        return redirect('/usuario');
    }
}
