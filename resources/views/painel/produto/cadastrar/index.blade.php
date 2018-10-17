@extends('painel.template.index')

@section('content')
@if(isset($errors) && count($errors) > 0)

@foreach($errors->all() as $error)
 <h1>{{$error}}</h1>
@endforeach

@endif
<form method="post" action="{{ route('produto.cadastrar') }}">
  <div class="form-group">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name="txtNome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Number</label>
    <input type="text" name="txtQuantidade" class="form-control" id="exampleInputPassword1" placeholder="Number">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Active</label>
    <select name="txtAtivo" class="form-control form-control-lg">
  <option>Active</option>
  <option>Don´t active</option>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
    <select name="txtCategoria" class="form-control form-control-lg">
  <option>eletronicos</option>
  <option>moveis</option>
  <option>limpeza</option>
  <option>banho</option>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea name="txtDescricao" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter description"> </textarea>
  </div>
  <button type="submit" class="btn btn-success btn-lg btn-block"><i class="fas fa-plus"></i> Cadastrar Produto</button>
</form>
@endsection