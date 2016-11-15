<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
Use App\News;

class Home_Controller extends Controller
{
    public function home(){
        $news = new News;
        $menuTop = "Home";
        $newsItems = $news->getAllNewsItems();
        return view('home',compact('menuTop','newsItems'));
    }
}
