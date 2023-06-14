<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;
use App\Projeto;
use App\Parceiro;
use App\Institutional;

class SearchController extends Controller
{
    public function index(Request $request){
        $search = $request->search ? $this->removeMultiSpace(str_slug($request->search, ' ')) : '';

        $obj = [];

        $noticias = Noticia::whereRaw("name like \"%$search%\"")->get();
        foreach ($noticias as $key => $value) {
            $value->category = 'Notícias';
            $value->url = '/noticia/show/'. $value->id;
            $obj[] = $value;
        }

        $projetos = Projeto::whereRaw("name like \"%$search%\"")->get();
        foreach ($projetos as $key => $value) {
            $value->category = 'Projetos';
            $value->url = '/projetos/'. $value->id;
            $obj[] = $value;
        }

        $parceiros = Parceiro::whereRaw("name like \"%$search%\"")->get();
        foreach ($parceiros as $key => $value) {
            $value->category = 'Ações';
            $value->url = '/acoes';
            $obj[] = $value;
        }

        $youtube = Institutional::where('type','youtube')->first();
        if (!empty($youtube)) {
            $base_youtube = 'https://www.youtube.com/embed/';
            $youtube->description = $base_youtube . $youtube->description;
        } else {
            $youtube = new \stdClass();
            $youtube->description = 'https://www.youtube.com/embed/hVFUDOLdSME';
        }

        // return response()->json(['search' => $obj]);
        return view('search', compact('obj','youtube'));
    }

    private function removeMultiSpace($string) {
        $string = preg_replace('/\s+/', ' ', $string);
        return trim($string);
    }
}
