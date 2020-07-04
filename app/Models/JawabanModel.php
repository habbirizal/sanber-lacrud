<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class JawabanModel 
{
    public static function get_all(){
        $items=DB::table("jawaban")->get();
        return $items;
    }

    public static function get_all_tanyaid($id){
        $items=DB::table("jawaban")->where('tanya_id',$id)->get();
        return $items;
    }

    public static function save($data){
        $new_item= DB::table("jawaban")->insert($data);
        return $new_item;
    }

    public static function find_by_id($id){
        $items= DB::table("jawaban")->where('id',$id)->first();
        return $items;
    }

    public static function update($id,$data){
        $items= DB::table("jawaban")->where('id',$id)->update($data);
        return $items;
    }

    public static function destroy($id){
        $items= DB::table("jawaban")->where('id',$id)->delete();
        return $items;
    }

}