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
        'active'      => 'required',
        'category'    => 'required',
        'description' => 'min:3|max:1000'
    ];
}
