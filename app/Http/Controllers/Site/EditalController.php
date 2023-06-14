<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notice;
use App\Multimidia;
use App\Institutional;

class EditalController extends Controller
{
    public function index(){
        $editais = Notice::get();
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

        return view('editais', compact('editais','imagens','video','youtube'));
    }
}
