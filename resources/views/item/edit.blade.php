@extends('adminlte.master')
@section('title','Form CRUD')
@section('subtitle','Example CRUD')
@section('inner')
	<form role="form" action="/items/{{$item->id}}" method="POST">
	@csrf
  @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Item Name </label>
                    <input type="text" class="form-control" id="name" name="name"placeholder="Enter item's name" value="{{$item->name}}">
                  </div>
                  <div class="form-group">
                    <label for="stock">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description here" value="{{$item->description}}">
                  </div>
                  <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" placeholder="10" value="{{$item->stock}}">
                  </div>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="1000000" value="{{$item->price}}">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">
                  Update</button>
                </div>
              </form>
@endsection;