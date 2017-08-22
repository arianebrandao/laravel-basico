<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        /*
        $this->middleware('auth')->only([
                'contato',
                'categoria'
            ]);
        */

        /*
        $this->middleware('auth')->except([
                'index',
                'contato'
            ]);
        */


    }

    public function index()
    {
    	//return view('welcome');
        
        $teste = 123;
        $teste2 = 321;
        $teste3 = 132;
        $title = 'Titulo teste 222';
        $xss = "<script>alert('Ataque XSS');</script>";
        $var1 = '123';
        $arrayData = [1,2,3,4,5,6,7,8,9];
        //return view('teste', ['teste' => $teste, 'teste2' => $teste2]);
        //return view('site.index', compact('teste','teste2', 'teste3'));
        return view('site.index', compact('title', 'xss','var1','arrayData'));
    }
    public function contato()
    {
    	return view('site.contato');
    }
    public function categoria($idCategoria)
    {
    	return "Listagem de produtos da categoria: {$idCategoria}";
    }
    public function categoriaOp($idCategoria = 1)
    {
    	return "Listagem de produtos da categoria: {$idCategoria}";
    }

}
