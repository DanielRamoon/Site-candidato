<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Parceiro;

class ParceiroController extends Controller
{
    public function index(){
        $dados = Parceiro::get();
        return view('admin.parceiro.index', compact('dados'));
    }

    public function create(){
        return view('admin.parceiro.create');
    }

    public function store(Request $request){
        $dados = new Parceiro;
        $dados->fill($request->all());
        if($request->hasFile('image')){
			$file = $request->file('image');
			$fileName = rand(1, 999) . $file->getClientOriginalName();
			// $$request->file('image')->storeAs('public', $fileName ); // move o arquivo para ( storage / public)
            // $dados->image = $fileName;
            Storage::disk('public')->put('', $file);
            $dados->image = $file->hashName();
        }

        if($request->hasFile('galery')){
            foreach ($request->file('galery') as $key => $imageToUpload) {
                $file = $imageToUpload;
                $fileName = rand(1, 999) . $file->getClientOriginalName();
                Storage::disk('public')->put('', $file);
                if($key > 0){
                    $dados->galery .= "//".$file->hashName();
                }else{
                    $dados->galery = $file->hashName();
                }
            }
        }

        $dados->users_id = $user = Auth::user()->id;
        $dados->save();
        return redirect('/acao');
    }

    public function edit($id){
        $dados = Parceiro::where('id', $id)->first();
        // dd($dados);
        return view('admin.parceiro.edit', compact('dados'));
    }

    public function update(Request $request, $id){
        $dados = Parceiro::where('id', $id)->first();
        $image = $dados->image;
        $galery = $dados->galery;
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

        if($request->hasFile('galery')){
            foreach ($request->file('galery') as $key => $imageToUpload) {
                $file = $imageToUpload;
                $fileName = rand(1, 999) . $file->getClientOriginalName();
                Storage::disk('public')->put('', $file);
                if($key > 0){
                    $dados->galery .= "//".$file->hashName();
                }else{
                    $dados->galery = $file->hashName();
                }
            }

        }else{
            $dados->galery = $galery;
        }
        $dados->users_id = $user = Auth::user()->id;
        $dados->save();
        return redirect('/acao');
    }

    public function delete($id){
        $dados = Parceiro::where('id', $id)->first();
        $dados->delete();
        return redirect('/acao');
    }
}
