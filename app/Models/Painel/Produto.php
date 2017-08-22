<?php
namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //pega a tabela e adiciona um S, produtos OU
    //protected $table = 'produtos';
    
    //quais campos podem ser inseridos
    protected $fillable = [
        'nome', 'numero', 'ativo', 'categoria', 'descricao'
    ];
    
    //quais campos não podem ser inseridos
    //protected $guarded = ['admin'];
    
    //regras de validacao no ProdutoFormRequest
}
