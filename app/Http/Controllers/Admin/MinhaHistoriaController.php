<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Institutional;

class MinhaHistoriaController extends Controller
{
    public function create(){
        $historia = Institutional::where('type','historia')->first();
        $youtube = Institutional::where('type','youtube')->first();

        if (!empty($youtube)) {
            $base_youtube = 'https://www.youtube.com/watch?v=';
            $youtube->description = $base_youtube . $youtube->description;
        }

        return view('admin.institutional.create', compact('historia','youtube'));
    }

    public function update(Request $request, $type){
        if (!empty($request->youtube)) {
            $dados = Institutional::where('type', 'youtube')->first();
            if (!isset($dados)) {
                $dados = new Institutional();
                $dados->type = 'youtube';
            }

            $link_formatted = str_replace(
                'https://www.youtube.com/watch?',
                '',
                $request->youtube
            );

            $array_link = explode('&', $link_formatted);

            if (isset($array_link[0])) {
                $link_formatted = str_replace(
                    'v=',
                    '',
                    $link_formatted
                );
            } else {
                $link_formatted = '';
            }

            $dados->description = $link_formatted;
            $dados->save();
        }

        if (!empty($request->historia)) {
            $dados = Institutional::where('type', 'historia')->first();
            if (!isset($dados)) {
                $dados = new Institutional();
                $dados->type = 'historia';
            }
            $dados->description = $request->historia;
            $dados->save();
        }

        return redirect('/minha-historia/create');
    }
}
