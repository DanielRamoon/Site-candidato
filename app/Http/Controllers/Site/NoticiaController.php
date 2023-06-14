<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;
use App\Multimidia;
use App\Institutional;
use App\Parceiro;

class NoticiaController extends Controller
{
    public function index(){
        $noticias = Noticia::get();
        $parceiros = Parceiro::limit(2)->orderBy('id','DESC')->get();
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

        return view('noticias', compact('noticias','imagens','parceiros','video','youtube'));
    }

    public function show($id){
        $noticia = Noticia::where('id',$id)->first();
        $imagens = Multimidia::orderBy('id','DESC')->first();
        $parceiros = Parceiro::limit(2)->orderBy('id','DESC')->get();
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

        return view('noticia', compact('noticia','parceiros','imagens','video','youtube'));
    }
}
