<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller{

public function Index(){
return view('inicial.index');
}

public function CategoriaIndex(){
return view('site.categoria.index');    
}

public function ContatoIndex(){
return view('site.contato.index');    
}
}
