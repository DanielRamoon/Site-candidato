<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Multimidia;
use App\Institutional;

class GaleriaController extends Controller
{
    public function index(){
        $multimidias = Multimidia::get();
        foreach ($multimidias as $multimidia) {
            $multimidia->capa = explode("//",$multimidia->image);
            $multimidia->capa = $multimidia->capa[0];
        }
        $imagens = Multimidia::orderBy('id','DESC')->first();
        if(isset($imagens)){
            $imagens = explode("//",$imagens->image);
        }else{
            $imagens[0] = null;
        }
        $multimidia = MUltimidia::get();
        $video = "video";
        foreach ($multimidia as $key => $value) {
            $videos = explode("//",$value->image);
            foreach ($videos as $mp4) {
                if(preg_match('/mp4/', $mp4)){
                    $video = $mp4;
                }
            }
        }

        $youtube = Institutional::where('type','youtube')->first();
        if (!empty($youtube)) {
            $base_youtube = 'https://www.youtube.com/embed/';
            $youtube->description = $base_youtube . $youtube->description;
        } else {
            $youtube = new \stdClass();
            $youtube->description = 'https://www.youtube.com/embed/hVFUDOLdSME';
        }

        return view('galerias', compact('multimidias','imagens','video','youtube'));
    }

    public function show($id){
        $multimidia = Multimidia::where('id',$id)->first();
        $multimidia->imagens = explode("//",$multimidia->image);
        // dd($multimidia);
        $youtube = Institutional::where('type','youtube')->first();
        if (!empty($youtube)) {
            $base_youtube = 'https://www.youtube.com/embed/';
            $youtube->description = $base_youtube . $youtube->description;
        } else {
            $youtube = new \stdClass();
            $youtube->description = 'https://www.youtube.com/embed/hVFUDOLdSME';
        }

        return view('galeria', compact('multimidia','youtube'));
    }
}
