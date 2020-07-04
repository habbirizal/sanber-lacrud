<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;

class ItemController extends Controller
{
    //
    public function create(){
    	return view('item.form');
    }

    public function store(Request $request){
    	$data=$request->all();
    	unset($data["_token"]);
    	$newitem=ItemModel::save($data);
    	return redirect('/items');
    }

    public function index(){
    	$items=ItemModel::get_all();
    	return view('item.index',compact('items'));
    }

    public function show($id){
    	$item=ItemModel::find_by_id($id);
    	return view('item.show',compact('item'));
    }

    public function edit($id){
    	$item=ItemModel::find_by_id($id);
    	return view('item.edit',compact('item'));
    }

    public function update($id,Request $request){
    	$data=$request->all();
    	unset($data["_token"]);
    	unset($data["_method"]);
    	$item=ItemModel::update($id,$data);
    	return redirect('/items');
    }

    public function destroy($id){
    	$item=ItemModel::destroy($id);
    	return redirect('/items');
    }
}
