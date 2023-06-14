<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Mail;

class ContatoController extends Controller
{
    public function index(){
        $dados = Mail::where('type','contato')->get();
        return view('admin.contato.index', compact('dados'));
    }
}
