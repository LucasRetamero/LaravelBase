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

    public function Adicionar(){
    $title = "Cadastro de produto";
    return view('painel.produto.cadastrar.index',compact('title'));
    }

    public function Add(Request $request){
    $dadosForm = $request->all();
    if($dadosForm['active'] == 'Active'){
    $verifica = 1;
    }else{
    $verifica = 0;
    }
    //dd = imprimir saida  usado como debug dd()
    $this->validate($request,$this->produto->rules);
    $salvando = $this->getProduto()::create([
    'name'        => $dadosForm['name'],
    'number'      => $dadosForm['number'],
    'active'      => $verifica,
    'category'    => $dadosForm['category'],
    'description' => $dadosForm['description']
    ]);
    if($salvando)
    return redirect()->route('produto.lista');
    else
    return "Erro ao salvar";
    }

    public function Att($id){
    $title = "Atualizar Produto";
    $dados = $this->getProduto()->find($id);
    if($dados)
    return view('painel.produto.editar.index',compact('dados','title','id'));
    else
    return redirect()->route('produto.lista');
    }
    
    public function Atualizar(Request $request){
    if($request['active'] == "Active"){
    $vali = 1;
    }else{
    $vali = 0;
    }
    $this->validate($request,$this->getProduto()->rules);
    $dadosForm = $this->getProduto()::where('id',$request['id'])
                                    ->update([
                                    'name'        => $request['name'],
                                    'number'      => $request['number'],
                                    'active'      => $vali,
                                    'category'    => $request['category'],
                                    'description' => $request['description']
                                    ]);
    if($dadosForm)
    return redirect()->route('produto.lista');
    else
    return "Erro ao alterar";
    }
    
    public function DeletarForm($id){
    $title = "Deletar Produto";
    $dados = $this->getProduto()::select('*')
                                  ->where('id',$id)
                                  ->get();
    if($dados)
    return view('painel.produto.deletar.index',compact('title','id','dados')); 
    else
    return "Erro de query no delete";   
    }

    public function Deletando(Request $request){
    $deletando = $this->getProduto()::destroy($request['id']);
    if($deletando)
    return redirect()->route('produto.lista');
    else
    return "Erro ao deletar produto";
    }

    public function getProduto(){
    return $this->produto;
    }
}
