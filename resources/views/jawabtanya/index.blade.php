@extends('adminlte.master')
@section('title','Jawaban')
@section('subtitle','List Jawaban')
@section('inner')
<table class="table table-bordered">
  <thead>                  
    <tr>
      <th style="width: 10px">#</th>
      <th>User id</th>
      <th>Isi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($items as $key => $item)
  	<tr>
  		<td> {{$key+1}} </td>
  		<td> {{$item->user_id}}</td>
  		<td> {{$item->isi}}</td>
  	</tr>

  @endforeach
    
  </tbody>
</table>
<form role="form" action="/jawaban/{{$id}}" method="POST">
  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">User ID </label>
                    <input type="text" class="form-control" id="name" name="user_id" placeholder="Enter user Id">
                  </div>
                    <input type="text" class="form-control" id="description" name="tanya_id" placeholder="Judul" style="display:none" readonly value={{$id}}>
                  <div class="form-group">
                    <label for="stock">Isi</label>
                    <input type="text" class="form-control" id="stock" name="isi" placeholder="ISI">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
@endsection