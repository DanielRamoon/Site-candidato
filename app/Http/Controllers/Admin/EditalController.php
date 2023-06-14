<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Notice;

class EditalController extends Controller
{
    public function index(){
        $dados = Notice::get();
        return view('admin.edital.index', compact('dados'));
    }

    public function create(){
        return view('admin.edital.create');
    }

    public function store(Request $request){
        $dados = new Notice;
        $dados->fill($request->all());
        if($request->hasFile('archive')){
			$file = $request->file('archive');
			$fileName = rand(1, 999) . $file->getClientOriginalName();
			// $file->storeAs('public', $fileName ); // move o arquivo para ( storage / public)
            // $dados->archive = $fileName;
            Storage::disk('public')->put('', $file);
            $dados->archive = $file->hashName();
        }
        $dados->users_id = $user = Auth::user()->id;
        $dados->save();
        return redirect('/edital');
    }

    public function edit($id){
        $dados = Notice::where('id', $id)->first();
        // dd($dados);
        return view('admin.edital.edit', compact('dados'));
    }

    public function update(Request $request, $id){
        $dados = Notice::where('id', $id)->first();
        $archive = $dados->archive;
        $dados->fill($request->all());
        if($request->hasFile('archive')){
			$file = $request->file('archive');
			$fileName = rand(1, 999) . $file->getClientOriginalName();
			// $file->storeAs('public', $fileName ); // move o arquivo para ( storage / public)
            // $dados->archive = $fileName;
            Storage::disk('public')->put('', $file);
            $dados->archive = $file->hashName();
        }else{
            $dados->archive = $archive;
        }
        $dados->users_id = $user = Auth::user()->id;
        $dados->save();
        return redirect('/edital');
    }

    public function delete($id){
        $dados = Notice::where('id', $id)->first();
        $dados->delete();
        return redirect('/edital');
    }
}
