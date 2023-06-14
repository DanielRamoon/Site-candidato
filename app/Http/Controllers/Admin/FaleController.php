<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Mail;

class FaleController extends Controller
{
    public function index(){
        $dados = Mail::where('type','fale')->get();
        return view('admin.fale.index', compact('dados'));
    }
}
