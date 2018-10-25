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
<form method="post" action="{{ route('produto.cadastrar') }}">
  <div class="form-group">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <input type="hidden" name="id"  value="id" />
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" value="{{ old('name') }}">
    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Number</label>
    <input type="text" name="number" class="form-control" id="exampleInputPassword1" placeholder="Number" value="{{ old('number') }}">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Active</label>
    <select name="active" class="form-control form-control-lg">
  <option>Active</option>
  <option>Don´t active</option>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
    <select name="category" class="form-control form-control-lg">
  <option>eletronicos</option>
  <option>moveis</option>
  <option>limpeza</option>
  <option>banho</option>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter description">{{ old('description') }}</textarea>
  </div>
  <button type="submit" class="btn btn-success btn-lg btn-block"><i class="fas fa-plus"></i> Cadastrar Produto</button>
</form>
@endsection