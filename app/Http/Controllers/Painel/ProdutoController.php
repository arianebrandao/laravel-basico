<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produto;
use App\Http\Requests\Painel\ProdutoFormRequest;

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
        $title = "Cadastrar novo produto";
        $categorias = ['eletronicos','moveis','limpeza','banho'];
        return view('painel.produtos.create', compact('title','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoFormRequest $request)
    {
        //dd() para fazer debug
        //dd($request->all());
        //dd($request->only(['nome','numero']));
        //dd($request->except(['nome','numero']));
        //dd($request->input('nome'));
        
        //pega todos os dados do formulario
        $dataForm = $request->all();
        
        $dataForm['ativo'] = (!isset($dataForm['ativo'])) ? 0 : 1;
        

        //valida os dados
        //$this->validate($request, $this->produto->rules);
        /*
        $validate = validator($dataForm, $this->produto->rules, $this->produto->messages);
        if($validate->fails()){
            return redirect()
                    ->route('produtos.create')
                    ->withErrors($validate)
                    ->withInput();
        }
         * 
         */
        
        //faz o cadastro
        $insert = $this->produto->create($dataForm);
        
        if($insert)
            return redirect()->route('produtos.index');
        else
            return redirect()->back();
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
        //INSERT
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
        
        //UPDATE
        /*
        $prod = $this->produto->find(3);
        //dd($prod);
        
        $prod->nome = 'Nome Atualizado';
        $prod->numero = 1111;
        $prod->ativo = true;
        $prod->categoria = 'eletronicos';
        $prod->descricao = 'Descrição do produto aqui UPDATE';
        $update = $prod->save();
        
        if($update)
            return "Alterado com sucesso.";
        else
            return "Falha ao alterar.";
        
         * 
         */
        
        /*
        
        $prod = $this->produto->find(4);
        $update = $prod->update([
                        'nome'      => 'Produto2 UPDATE22',
                        'numero'    => 444,
                        'ativo'     => true,
        ]);
        
        if($update)
            return "Alterado com sucesso.2";
        else
            return "Falha ao alterar.2";
         * 
         */
        
        /*
        $prod = $this->produto->where('numero','=',12);
        $update = $prod->update([
                        'nome'      => 'Sabonete 2',
                        'numero'    => 1212,
                        'ativo'     => true,
        ]);
        
        if($update)
            return "Alterado com sucesso.3";
        else
            return "Falha ao alterar.3";
        
         * 
         */
        
        //DELETAR
        $prod = $this->produto->find(3);
        $delete = $prod->delete();
        //$prod = $this->produto->where('numero',444)->delete();
        
        if($delete)
            return "Deletado com sucesso";
        else
            return "Falha ao deletar";
        //ou simplesmente:
        //$prod = $this->produto->destroy([3,5,6]);
    }
}
