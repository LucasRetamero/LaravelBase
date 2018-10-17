<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Painel\Produto;
use Illuminate\Support\Facades\Redirect;

class ProdutoController extends Controller
{
    private $produto;

    public function __construct(Produto $products){
    $this->produto = $products;
    }

    public function index(){
     $produtos= $this->getProduto()->all();
     $title = "Lista de produtos";
    return view('painel.produto.index',compact('produtos','title'));
    }

    public function Salvando(){
    $saveProdutos = $this->getProduto()::create([
            'name' => 'Uno',
            'number' => '900',
            'active' => '1',
            'category' => 'eletronicos',
            'description' => 'Junto com pack begginer two'
            ]); 
    }

    public function Atualizando(){
    $attProdutos = $this->getProduto()::where('id',1)
                        ->update([
            'name' => 'Two',
            'number' => '100',
            'active' => '0',
            'category' => 'eletronicos',
            'description' => 'All witch pack'
            ]);
    }
    public function Deletando(){
    $delProduto = $this->getProduto()::where('id','>=',2)
                       ->delete();  
    }
    public function Adicionar(){
    $title = "Cadastro de produto";
    return view('painel.produto.cadastrar.index',compact('title'));
    }
    public function Add(Request $request){
    $dadosForm = $request->all();
    if($dadosForm['txtAtivo'] == 'Active')
    $verifica = 1;
    else
    $verifica = 0;
    //dd = imprimir saida  usado como debug dd()
    $this->validate($request,$this->produto->rules);
    $salvando = $this->getProduto()::create([
    'name'        => $dadosForm['txtNome'],
    'number'      => $dadosForm['txtQuantidade'],
    'active'      => $verifica,
    'category'    => $dadosForm['txtCategoria'],
    'description' => $dadosForm['txtDescricao']
    ]);
    if($salvando)
    return redirect()->route('produto.lista');
    else
    return "Erro ao salvar";
    }
    public function getProduto(){
    return $this->produto;
    }
}
