<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Multimidia;
use App\Projeto;
use App\Parceiro;
use App\Institutional;
use App\Mail;

class ContatoController extends Controller
{
    public function index(){
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

        return view('contatos', compact('imagens','parceiros','video','youtube'));
    }

    public function store(Request $request, $type){
        $dados = new Mail;
        $dados->type = $type;
        $dados->fill($request->all());
        $dados->save();
        return redirect('/');
    }
}
