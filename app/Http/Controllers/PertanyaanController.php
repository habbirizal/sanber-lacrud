<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function create(){
    	return view('tanyajawab.form');
    }

    public function store(Request $request){
    	$data=$request->all();
    	unset($data["_token"]);
    	$newitem=PertanyaanModel::save($data);
    	return redirect('/pertanyaan');
    }

    public function index(){
    	$items=PertanyaanModel::get_all();
    	return view('tanyajawab.index',compact('items'));
    }

    public function show($id){
    	$item=PertanyaanModel::find_by_id($id);
    	return view('tanyajawab.show',compact('item'));
    }

    public function edit($id){
    	$item=PertanyaanModel::find_by_id($id);
    	return view('tanyajawab.edit',compact('item'));
    }

    public function update($id,Request $request){
    	$data=$request->all();
    	unset($data["_token"]);
    	unset($data["_method"]);
    	$item=PertanyaanModel::update($id,$data);
    	return redirect('/pertanyaan');
    }

    public function destroy($id){
    	$item=PertanyaanModel::destroy($id);
    	return redirect('/pertanyaan');
    }
}
