@extends('painel.template.index')

@section('content')
@if(isset($errors) && count($errors) > 0)
<div class="alert alert-danger" role="alert">
<ul>
@foreach($errors->all() as $error)
 <li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
<form method="post" action="{{ route('produto.att') }}">
  <div class="form-group">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <input type="hidden" name="id"  value="{{ $id }}" />
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" value="{{ $dados->name }}">
    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Number</label>
    <input type="text" name="number" class="form-control" id="exampleInputPassword1" placeholder="Number" value="{{ $dados->number }}">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Active</label>
 <select name="active" class="form-control form-control-lg">
  <option @if($dados['active'] == 1) selected="selected" @endif>Active</option>
  <option @if($dados['active'] == 0) selected="selected" @endif>Don´t active</option>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
  <select name="category" class="form-control form-control-lg" value="moveis">
  <option  @if($dados['category'] == "eletronicos") selected="selected" @endif>eletronicos</option>
  <option  @if($dados['category'] == "moveis")      selected="selected" @endif>moveis</option>
  <option  @if($dados['category'] == "limpeza")     selected="selected" @endif>limpeza</option>
  <option  @if($dados['category'] == "banho")       selected="selected" @endif>banho</option>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter description">{{ $dados->description }}</textarea>
  </div>
  <button type="submit" class="btn btn-success btn-lg btn-block"><i class="fas fa-marker"></i> Editar Produto</button>
</form>
<a href="{{ route('produto.lista') }}"><button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fas fa-clipboard-list"></i> Lista de Produto</button></a>
@endsection