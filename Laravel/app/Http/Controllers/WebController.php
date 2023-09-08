<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){

        $nome = 'Claylton';
        $sobrenome = 'Muniz';
        $data_nasc = '24/05/2004';
        $ano_nasc = 2004;
        $ano_atual = date("Y");
        $idade = $ano_atual - $ano_nasc;


        $data = [
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'data_nasc' => $data_nasc,
            'ano_atual' => $ano_atual,
            'idade' => $idade
        ];

        return view('index', $data);
    }

    public function varUrl(Request $r){

        $quant = $r->qnt;

        $data = [
            'valor' => $quant
        ];

        return view('var_url', $data);
    }

    public function ativ(Request $r){

        $atv = sprintf("%03d", $r->atv);

        if ($atv == '001') {

            $pessoas = [
                [
                    'img' => 'https://i.pravatar.cc/150?='.rand(0, 50),
                    'nome' => 'Claylton',
                    'idade' => 19
                ],
                [
                    'img' => 'https://i.pravatar.cc/150?='.rand(0, 50),
                    'nome' => 'Claudio Jr',
                    'idade' => 15
                ],
                [
                    'img' => 'https://i.pravatar.cc/150?='.rand(0, 50),
                    'nome' => 'Clara',
                    'idade' => 9
                ]
            ];

            $data['pessoas'] = $pessoas;

        } elseif ($atv == '002') {

            for ($i=0; $i < 50; $i++) {
                $imagem[$i] = 'https://i.pravatar.cc/150?='.$i;
            }

            $data = [
                'img' => $imagem
            ];

        }

        return view('exec'.$atv, $data);

    }

    public function exit(){
        return view('exit');
    }

}
