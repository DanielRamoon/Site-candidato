<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Parceiro;
use App\Multimidia;
use App\Institutional;

class AcaoController extends Controller
{
    public function index(){
        $acoes = Parceiro::get();
        $parceiros = Parceiro::limit(2)->orderBy('id','DESC')->get();
        $youtube = Institutional::where('type','youtube')->first();
        if (!empty($youtube)) {
            $base_youtube = 'https://www.youtube.com/embed/';
            $youtube->description = $base_youtube . $youtube->description;
        } else {
            $youtube = new \stdClass();
            $youtube->description = 'https://www.youtube.com/embed/hVFUDOLdSME';
        }

        return view('acoes', compact('acoes','parceiros','youtube'));
    }

    public function show($id){
        $acao = Parceiro::where('id', $id)->first();
        $galery = explode("//",$acao->galery);
        array_push($galery, $acao->image);
        $parceiros = Parceiro::limit(2)->orderBy('id','DESC')->get();
        $youtube = Institutional::where('type','youtube')->first();
        if (!empty($youtube)) {
            $base_youtube = 'https://www.youtube.com/embed/';
            $youtube->description = $base_youtube . $youtube->description;
        } else {
            $youtube = new \stdClass();
            $youtube->description = 'https://www.youtube.com/embed/hVFUDOLdSME';
        }

        return view('acao', compact('acao','parceiros','galery','youtube'));
    }
}
