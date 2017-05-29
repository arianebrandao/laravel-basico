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
    	return view('welcome');
    }
    public function contato()
    {
    	return 'página contato';
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
