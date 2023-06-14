<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Projeto;

class ProjetoController extends Controller
{
    public function index(){
        $dados = Projeto::get();
        return view('admin.projeto.index', compact('dados'));
    }

    public function create(){
        return view('admin.projeto.create');
    }

    public function store(Request $request){
        $dados = new Projeto;
        $dados->fill($request->all());
        if($request->hasFile('image')){
			$file = $request->file('image');
			$fileName = rand(1, 999) . $file->getClientOriginalName();
			// $file->storeAs('public', $fileName ); // move o arquivo para ( storage / public)
            Storage::disk('public')->put('', $file);
            $dados->image = $file->hashName();
        }

        if($request->hasFile('doc')){
			$file = $request->file('doc');
			$fileName = rand(1, 999) . $file->getClientOriginalName();
            Storage::disk('public')->put('', $file);
            $dados->doc = $file->hashName();
        }

        $dados->users_id = $user = Auth::user()->id;
        $dados->save();
        return redirect('/projeto');
    }

    public function edit($id){
        $dados = Projeto::where('id', $id)->first();
        // dd($dados);
        return view('admin.projeto.edit', compact('dados'));
    }

    public function update(Request $request, $id){
        $dados = Projeto::where('id', $id)->first();
        $image = $dados->image;
        $dados->fill($request->all());
        if($request->hasFile('image')){
			$file = $request->file('image');
			$fileName = rand(1, 999) . $file->getClientOriginalName();
			// $file->storeAs('public', $fileName ); // move o arquivo para ( storage / public)
            // $dados->image = $fileName;
            Storage::disk('public')->put('', $file);
            $dados->image = $file->hashName();
        }else{
            $dados->image = $image;
        }

        if($request->hasFile('doc')){
			$file = $request->file('doc');
			$fileName = rand(1, 999) . $file->getClientOriginalName();
            Storage::disk('public')->put('', $file);
            $dados->doc = $file->hashName();
        }else{
            $dados->doc = $doc;
        }

        $dados->users_id = $user = Auth::user()->id;
        $dados->save();
        return redirect('/projeto');
    }

    public function delete($id){
        $dados = Projeto::where('id', $id)->first();
        $dados->delete();
        return redirect('/projeto');
    }
}
