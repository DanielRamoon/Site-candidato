<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Multimidia;

class Servico02Controller extends Controller
{
    public function index(){
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
        return view('servico-02', compact('imagens','video'));
    }
}
