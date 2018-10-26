@extends('painel.template.index')

@section('content')
<table class="table">
  <caption>
  <a href="{{ url('/produto/add') }}" title="Adicionar Produto"><button type="button" class="btn btn-success btn-lg btn-block"><i class="fas fa-plus"></i> Cadastrar produto</button></a></caption>
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Active</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($produtos as $produto)
    <tr>
      <th scope="row">{{$produto->name}}</th>
      <td>{{$produto->number}}</td>
      <td>{{$produto->active}}</td>
      <td>{{$produto->category}}</td>
      <td>{{$produto->description}}</td>   
      <td><a href="{{ route('produto.atualizar',$produto->id) }}" class="btn btn-primary" title="Editar Produto"><i class="fas fa-pen-alt"></i></a> 
          <a href="{{ $produto->id }}" class="btn btn-danger" title="Deletar Produto"><i class="fas fa-trash-alt"></i></a></td> 
    </tr>
@endforeach
  </tbody>
</table>
@endsection

