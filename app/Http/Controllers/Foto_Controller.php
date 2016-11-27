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
            return redirect('brouwerij/gallerij')
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

    public function doImageUpload(Request $request)
    {
        // get file van post request

        $file = $request->file('file');

        // file naam

        $filename = uniqid() . $file->getClientOriginalName();

        // file verplaatsen naar correcte plaats

        $file->move('gallery/images', $filename);

        //file opslaan in database

        $gallery = Gallery::find($request->input('gallery_id'));

        $image = $gallery->images()->create([
            'gallery_id' =>$request->input('gallery_id'),
            'file_name' => $filename,
            'file_size' =>$file->getClientSize(),
            'file_mime' => $file->getClientMimeType(),
            'file_path' => 'Gallery/Images/' . $filename,
            'created_by' => 1,
        ]);

        return $image;
    }

     public function deleteGallery($id)
     {
         //laden van gallerij
         $currentGallery = Gallery::findOrFail($id);

         //haal alle images op
         $images = $currentGallery->images();

         ///delete images
         foreach ($currentGallery->images as $image){
             unlink(public_path($image->file_path));
         }

         //delete database records
         $currentGallery->images()->delete();

         $currentGallery->delete();

         return redirect()->back();

     }
}