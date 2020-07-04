@extends('adminlte.master')
@section('title','Detail Items')
@section('subtitle','Example CRUD')
@section('inner')
  		<p> name : {{$item->name}}</p>
  		<p> description : {{$item->description}}</p>
  		<p> stock : {{$item->stock}}</p>
  		<p> price : {{$item->price}}</p>
@endsection;