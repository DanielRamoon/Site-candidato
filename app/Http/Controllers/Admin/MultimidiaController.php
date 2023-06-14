<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Multimidia;

class MultimidiaController extends Controller
{
    public function index(){
        $dados = Multimidia::get();
        return view('admin.multimidia.index', compact('dados'));
    }

    public function create(){
        return view('admin.multimidia.create');
    }

    public function store(Request $request){
        $dados = new Multimidia;
        // dd($request->hasFile('image'));
        $dados->fill($request->all());
        if($request->hasFile('image')){
            foreach ($request->file('image') as $key => $imageToUpload) {
                $file = $imageToUpload;
                // dd($imageToUpload);
                $fileName = rand(1, 999) . $file->getClientOriginalName();
                // $imageToUpload->storeAs('public', $fileName ); // move o arquivo para ( storage / public)
                Storage::disk('public')->put('', $file);
                if($key > 0){
                    $dados->image .= "//".$file->hashName();
                }else{
                    $dados->image = $file->hashName();
                }
            }

        }
        $dados->users_id = $user = Auth::user()->id;
        $dados->save();
        return redirect('/multimidia');
    }

    public function edit($id){
        $dados = Multimidia::where('id', $id)->first();
        // dd($dados);
        return view('admin.multimidia.edit', compact('dados'));
    }

    public function update(Request $request, $id){
        $dados = Multimidia::where('id', $id)->first();
        $image = $dados->image;
        $dados->fill($request->all());
        if($request->hasFile('image')){
            foreach ($request->file('image') as $key => $imageToUpload) {
                $file = $imageToUpload;
                // dd($imageToUpload);
                $fileName = rand(1, 999) . $file->getClientOriginalName();
                // $imageToUpload->storeAs('public', $fileName ); // move o arquivo para ( storage / public)
                Storage::disk('public')->put('', $file);
                if($key > 0){
                    $dados->image .= "//".$file->hashName();
                }else{
                    $dados->image = $file->hashName();
                }
            }

        }else{
            $dados->image = $image;
        }
        $dados->users_id = $user = Auth::user()->id;
        $dados->save();
        return redirect('/multimidia');
    }

    public function delete($id){
        $dados = Multimidia::where('id', $id)->first();
        $dados->delete();
        return redirect('/multimidia');
    }
}
