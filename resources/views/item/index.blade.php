@extends('adminlte.master')
@section('title','Data Items')
@section('subtitle','Example CRUD')
@section('inner')
<a href="/items/create" class="btn btn-primary mb-2"> Create New Item </a>
<table class="table table-bordered">
  <thead>                  
    <tr>
      <th style="width: 10px">#</th>
      <th>Name</th>
      <th>Description</th>
      <th style="width: 40px">Stock</th>
      <th style="width: 40px">Price</th>
      <th> Actions </th>
    </tr>
  </thead>
  <tbody>
  @foreach($items as $key => $item)
  	<tr>
  		<td> {{$key+1}} </td>
  		<td> {{$item->name}}</td>
  		<td> {{$item->description}}</td>
  		<td> {{$item->stock}}</td>
  		<td> {{$item->price}}</td>
  		<form action="/items/{{$item->id}}" method="post" stye="display:inline;">
  		@csrf
  		@method('DELETE')
  		<td> <a href="/items/{{$item->id}}" class="tn btn-sm btn-info">Show</a>
  		<a href="/items/{{$item->id}}/edit" class="tn btn-sm btn-default">Edit</a>
  		<button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
  		</form>
  		</td>
  	</tr>

  @endforeach
    
  </tbody>
</table>
@endsection