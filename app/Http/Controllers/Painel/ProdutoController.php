<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produto;

class ProdutoController extends Controller
{
    //DI no metodo construtor
    private $produto;
    public function __construct(Produto $produto) {
        $this->produto = $produto;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //Fazendo DI em apenas 1 metodo abaixo
    //public function index(Produto $produto)
    public function index()
    {
        $produtos = $this->produto->all();
        
        return view('painel.produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function tests()
    {
        /*
        $prod = $this->produto;
        $prod->nome = 'Nomee do produto';
        $prod->numero = 34234;
        $prod->ativo = true;
        $prod->categoria = 'eletronicos';
        $prod->descricao = 'Descrição do produto aqui';
        $insert = $prod->save();
        
        if($insert)
            return 'inserido com sucesso';
        else
            return 'falha ao inserir.';
         * 
         */
        
        /*
         * Insert recomendado com create
        $insert = $this->produto->create([
                        'nome'      => 'Produto2',
                        'numero'    => 447,
                        'ativo'     => false,
                        'categoria' => 'eletronicos',
                        'descricao' => 'Outra descrição'
                    ]);
        if($insert)
            return "inserido com sucesso ID {$insert->id}";
        else
            return 'falha ao inserir.';
         * 
         */
        
        
    }
}
