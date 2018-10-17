<?php

use Illuminate\Database\Seeder;
use App\Painel\Produto;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Produto::create([
      'name'        => 'Machado',
      'number'      => '50',
      'active'      => '1',
      'category'    => 'eletronicos',
      'description' => 'Refinado(3 slots) +8'
      ]); 
    }
}
