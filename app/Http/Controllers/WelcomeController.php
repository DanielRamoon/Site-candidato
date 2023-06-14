<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projeto;
use App\Parceiro;
use App\Noticia;
use App\Multimidia;
use App\Institutional;

class WelcomeController extends Controller
{
    public function index(){
        $projetos = Projeto::limit(8)->orderBy('id','DESC')->get();
        $noticias = Noticia::limit(4)->orderBy('id','DESC')->get();
        $parceiros = Parceiro::limit(2)->orderBy('id','DESC')->get();
        $historia = Institutional::where('type', 'historia')->first();
        $imagens = Multimidia::orderBy('id','DESC')->first();

        if(isset($imagens)){
            $imagens = explode("//",$imagens->image);
        }else{
            $imagens[0] = null;
        }
        $videos = Multimidia::limit(10)->get();
        $multimidia = MUltimidia::get();
        $video = "video";
        foreach ($multimidia as $key => $value) {
            $videoss = explode("//",$value->image);
            foreach ($videoss as $mp4) {
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

        return view('welcome', compact('projetos','parceiros','noticias','imagens','videos','video', 'historia','youtube'));
    }
}
