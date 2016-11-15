<?php

namespace App\Http\Controllers;

use App\Gallery;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Requests;

class Foto_Controller extends Controller
{
    public function home(){
        $menuTop = "Foto";
        $galleries = Gallery::all();
        return view('foto',compact('menuTop'))->with('galleries',$galleries);
    }

    public function viewGalleryList($id){

    }


    public function saveGallery(Request $request)
    {
        // validate the request through the validation rules
        $validator = Validator::make($request->all(),[
            'gallery_name' => 'required|min:3',
            'state' => 'exists:gallery,name',
        ]);
        //take actions when the validation has failed
        if ($validator->fails()){
            return redirect('foto')
                ->withErrors($validator)
                ->withInput();
        }


        $gallery = new Gallery();

        $gallery->name = $request->input('gallery_name');
        $gallery->created_by = 1;
        $gallery->published = 1;
        $gallery->save();

        return redirect()->back();


    }

    public function viewGalleryPics($id)
    {
        $gallery = Gallery::findorfail($id);

        return view('galleryview',compact('menuTop'))->with('gallery',$gallery);
    }

    public function doImageUpload(Request $request){

    }
}