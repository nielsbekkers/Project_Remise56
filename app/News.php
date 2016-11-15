<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $table = 'news';

    public function getAllNewsItems(){
        return DB::table('news')->get();
    }

    public function insertNewsItem($title,$comment,$filename){
        DB::table('news')->insertGetId(
            ['titel'=> $title,'uitleg' =>$comment,'padNaarFoto' => $filename]
        );
    }

    public function deleteNewsItem($id){
        DB::table('news')->where('ID','=',$id)->delete();
    }

    public function getPathOfNewsItemPicture($id){
        return DB::table('news')->get(['padNaarFoto'])->where('ID','=',$id);
    }
}
