@extends('adminlte.master')
@section('title','Detail Pertanyaan')
@section('subtitle','')
@section('inner')
  		<p> userid : {{$item->user_id}}</p>
  		<p> judul : {{$item->judul}}</p>
  		<p> isi : {{$item->isi}}</p>
@endsection;