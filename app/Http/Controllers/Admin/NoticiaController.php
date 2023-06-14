<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Noticia;

class NoticiaController extends Controller
{
    public function index(){
        $dados = Noticia::get();
        return view('admin.noticia.index', compact('dados'));
    }

    public function create(){
        return view('admin.noticia.create');
    }

    public function store(Request $request){
        $dados = new Noticia;
        $dados->fill($request->all());
        if($request->hasFile('image')){
			$file = $request->file('image');
			$fileName = rand(1, 999) . $file->getClientOriginalName();
            // dd($request->image->storeAs('public', $fileName ));
			// $request->file('image')->storeAs('/public', $fileName ); // move o arquivo para ( storage / public)
            // $dados->image = $fileName;
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
        return redirect('/noticia');
    }

    public function edit($id){
        $dados = Noticia::where('id', $id)->first();
        // dd($dados);
        return view('admin.noticia.edit', compact('dados'));
    }

    public function update(Request $request, $id){
        $dados = Noticia::where('id', $id)->first();
        $image = $dados->image;
        $doc = $dados->doc;
        $dados->fill($request->all());
        if($request->hasFile('image')){
			$file = $request->file('image');
			$fileName = rand(1, 999) . $file->getClientOriginalName();
			// $$request->file('image')->storeAs('public', $fileName ); // move o arquivo para ( storage / public)
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
        return redirect('/noticia');
    }

    public function delete($id){
        $dados = Noticia::where('id', $id)->first();
        $dados->delete();
        return redirect('/noticia');
    }
}
