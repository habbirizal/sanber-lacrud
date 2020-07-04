<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    //

    public function store($id,Request $request){
    	$data=$request->all();
    	unset($data["_token"]);
    	$newitem=JawabanModel::save($data);
    	return redirect('/jawaban/'.$id);
    }

    public function index($id){
    	$items=JawabanModel::get_all_tanyaid($id);
    	return view('jawabtanya.index',compact('items','id'));
    }

   
}
