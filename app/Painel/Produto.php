<?php

namespace App\Painel;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['name','number','active','picture','category','description']; // whitelist
    protected $guarded = ['admin'];  //blacklist
    public $rules = [
        'name'        => 'required|min:3|max:100',
        'number'      => 'required|numeric',
        'description' => 'min:3|max:1000'
    ];

    /* 
    ************ Sintaxe de querys ************
    
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

    ************ Fim da sintaxe ************
   */
}
