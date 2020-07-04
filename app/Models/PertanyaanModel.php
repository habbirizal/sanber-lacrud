<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PertanyaanModel 
{
    public static function get_all(){
    	$items=DB::table("pertanyaan")->get();
    	return $items;
    }

    public static function save($data){
    	$new_item= DB::table("pertanyaan")->insert($data);
    	return $new_item;
    }

    public static function find_by_id($id){
    	$items= DB::table("pertanyaan")->where('id',$id)->first();
    	return $items;
    }

    public static function update($id,$data){
    	$items= DB::table("pertanyaan")->where('id',$id)->update($data);
    	return $items;
    }

    public static function destroy($id){
    	$items= DB::table("pertanyaan")->where('id',$id)->delete();
    	return $items;
    }

}