<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

use App\Http\Requests;

class Foto_Controller extends Controller
{
    public function home(){
        $menuTop = "Foto";
        $galleries = Gallery::all();
        return view('foto',compact('menuTop'))->with('galleries',$galleries);
    }

    public function viewGalleryList(){

    }


    public function saveGallery(Request $request){

        $gallery = new Gallery();

        $gallery->name = $request->input('gallery_name');
        $gallery->created_by = 1;
        $gallery->published = 1;
        $gallery->save();

        return redirect()->back();


    }

    public function viewGalleryPics(){

    }

    public function doImageUpload(Request $request){

    }
}