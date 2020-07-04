@extends('adminlte.master')
@section('title','Pertanyaan')
@section('subtitle','List Pertanyaan')
@section('inner')
<a href="/pertanyaan/create" class="btn btn-primary mb-2"> Tambah Pertanyaan </a>
<table class="table table-bordered">
  <thead>                  
    <tr>
      <th style="width: 10px">#</th>
      <th>Judul</th>
      <th>Isi</th>
      <th style="width: 40px">User_id</th>
      <th> Actions </th>
    </tr>
  </thead>
  <tbody>
  @foreach($items as $key => $item)
  	<tr>
  		<td> {{$key+1}} </td>
  		<td> {{$item->judul}}</td>
  		<td> {{$item->isi}}</td>
  		<td> {{$item->user_id}}</td>
  		<td> 
  		<form action="/pertanyaan/{{$item->id}}" method="post" stye="display:inline;">
  		@csrf
  		@method('DELETE')
      <a href="/pertanyaan/{{$item->id}}" class="tn btn-sm btn-info">Show</a>
  		<a href="/pertanyaan/{{$item->id}}/edit" class="tn btn-sm btn-default">Edit</a>
  		<button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
      <a href="/jawaban/{{$item->id}}" class="tn btn-sm btn-default">Jawaban</a>
  		</form>
  		</td>
  	</tr>

  @endforeach
    
  </tbody>
</table>
@endsection