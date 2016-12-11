<?php
/**
 * Created by PhpStorm.
 * User: Soufiane
 * Date: 4/11/2016
 * Time: 22:08
 */

namespace  App\Http\Controllers;

use App\Http\Models\MenuItem_Model;
use Mail;
use App\User;
use App\Http\Requests;
use App\Http\Models\Personeel_Model;
use App\Http\Models\Reservatie_Model;
use App\Http\Models\Image;
use App\Http\Models\Gallery;
use App\Http\Models\News_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;



/////////////////////////       Deze controller bevat alle methodes voor het Remise 56 DASHBOARD
class Personeel_Controller extends Controller
{


    public function getHome(){
        return view('personeel.nieuweReservatieRestaurant');
    }

    /////////////////////////       De volgende functies wordt gebruikt om de juiste pagina te laden voor het Remise 56 DASHBOARD
    public function getPagina($sPaginaNaam){

        switch($sPaginaNaam){
            case "inloggen" :
                return view('personeel.inloggen');
                break;

            case "personeel":
                //return view('personeel.reservaties');
                $aPersoneel = $this->getPersoneel();

                return view('personeel.personeel', compact('aPersoneel'));

                break;

/*            case "nieuwPersoneelsLid" :
                return view('personeel.nieuwPersoneelsLid');
                break;*/

            case "nieuweReservatieRest" :
                return view('personeel.nieuweReservatieRestaurant');
                break;

            case "nieuweReservatieRond" :
                return view('personeel.nieuweReservatieRondleiding');
                break;

            case "nieuwMenuItem" :
                $categorien = $this->getAllCategories();
                $subcategorien = $this->getAllSubCategories();
                return view('personeel.nieuwMenuItem',compact('categorien','subcategorien'));
                break;

            case "menuItems" :
                $aMenuItems = $this->getMenuItems();
                return view('personeel.menuItems', compact('aMenuItems'));
                break;

            case "reservaties" :
                $reservaties = $this->getReservaties();
                $menuTop = "sReservaties";
                return view('personeel.reservaties', compact('menuTop', 'reservaties','errorReport'));

                break;
            case "verwijderReservatie" :
                return 'nothing';
                break;

            case "news":
                $menuTop = "Nieuws Items";
                $newsItems = $this->getAllNews();
                return view('personeel.newsitems',compact('menuTop','newsItems'));
                break;

            case "foto":
                $menuTop = "foto";
                $galleries = Gallery::all();
                return view('personeel.foto',compact('menuTop'))->with('galleries',$galleries);
                break;
            case "verwijderReservatie" :
                return 'nothing';
                break;

            case "news":
                $menuTop = "Nieuws Items";
                $newsItems = $this->getAllNews();
                return view('personeel.newsitems',compact('menuTop','newsItems'));
            default :
                return view('personeel.reservaties');
//                return view('personeel.inloggen');

                break;


        }

    }


    /////////////////////////       De volgende functies worden gebruikt voor PERSONEEL mbv het Personeel_Model
    public function getPersoneel(){
        $oPersoneel = new Personeel_Model();
        $aPersoneel = $oPersoneel->getPersoneel();

        return $aPersoneel;
    }

    public function nieuwPersoneelsLid(Request $request){
        $oPersoneel = new Personeel_Model();
        $bResult = $oPersoneel->nieuwPersoneelsLid($request);

        return view('personeel.nieuwPersoneelsLid', compact('bResult'));
    }

    public function verwijderPersoneelsLid($id){
        $personeelsLid = new Personeel_Model();
        $personeelsLid->verwijderPersoneel($id);

        return redirect()->back();
    }


    /////////////////////////       De volgende functies worden gebruikt voor RESERVATIES mbv het Reservatie_Model
    public function getReservaties(){

        $oReservatie = new Reservatie_Model();
        $Reservaties = $oReservatie->getReservaties();
        return $Reservaties;


    }

    public function nieuweReservatieRest(Request $request){
        $oReservatie = new Reservatie_Model();
        $bResult = $oReservatie->nieuwReservatieRest($request);

        return view('personeel.nieuweReservatieRestaurant', compact('bResult'));

    }

    public function nieuweReservatieRond(Request $request){
        $oReservatie = new Reservatie_Model();
        $bResult = $oReservatie->nieuwReservatieRond($request);


        return view('personeel.nieuweReservatieRondleiding', compact('bResult'));
    }

    public function verwijderReservatie($reservatieId) {
        $oReservatie = new Reservatie_Model();
        $bResult = $oReservatie->verwijderReservatie($reservatieId);
        echo $bResult;
        return $bResult;
    }

    /////////////////////////       De volgende functies worden gebruikt voor MENU ITEMS mbv het MenuItem_Model
    public function getMenuItems(){
        $oMenuItem = new MenuItem_Model();

        return $oMenuItem->getMenuItems();
    }

    public function getAllCategories(){
        $oMenuItem = new MenuItem_Model();
         return $oMenuItem->getAllCategories();
    }

    public function getAllSubCategories()
    {
        $oMenuItem = new MenuItem_Model();
        return $oMenuItem->getAllSubCategories();
    }
    public function nieuwMenuItem(Request $request){
        $oMenuItem = new MenuItem_Model();
        $bResult = $oMenuItem->nieuwMenuItem($request);
        $categorien = $oMenuItem->getAllCategories();
        $subcategorien = $oMenuItem->getAllSubCategories();
        var_dump($categorien);

       return view('personeel.nieuwMenuItem', compact('bResult','categorien','subcategorien'));
    }

    public function wijzigMenuItem(Request $request){
        $oMenuItem = new MenuItem_Model();
        $bResult = $oMenuItem->wijzigMenuItem($request);

        $aMenuItems = $this->getMenuItems();

        return view('personeel.menuItems', compact('bResult', 'aMenuItems'));
    }



     public function verwijderMenuItem($id){
         $menuItem = new MenuItem_Model();

         $menuItem->deleteMenuItem($id);

         return redirect()->back();
     }






    /////////////////////////       De volgende functies worden gebruikt voor GALLERIJ mbv het Galerij_Model
    public function getGallerij(){

    }

    public function nieuwFotoUpload(){

    }

    /////////////////////////       De volgende functies worden gebruikt voor NEWS ITENS mbv het News_Model
    public function getAllNews(){
        $news= new News_Model;
        return $news->getAllNewsItems();
    }

    public function nieuwsItems(){
        $menuTop = "Nieuws Items";
        $newsItems = $this->getAllNews();


        return view('personeel.newsitems',compact('newsItems','menuTop'));
    }

    public function nieuweNieuwsItem(Request $request){
        $news = new News_Model;
        $countOfNewsitems = $news->getCountOfNewsItems();
        $menuTop = "Nieuws Items";
        $newsItems = $this->getAllNews();
        if($countOfNewsitems == 3) {
            $countError = "Er zijn al 3 nieuws items aangemaakt dit is het maximum";
           return view('personeel.newsitems',compact('newsItems','countError','menuTop'));
        }else{
            if ($request['foto'] != null) {
                if (Input::file('foto')->isValid()) {
                    $filename = Input::file('foto')->getClientOriginalName();
                    Input::file('foto')->move('uploads', $filename);
                    $news->insertNewsItem(Input::get('titel'), Input::get('uitleg'), $filename);
                    $gelukt = "Het nieuws item is succesvol toegevoegd aan de homepagine, dit met een foto";
                }
            } else {
                $news->insertNewsItem(Input::get('titel'), Input::get('uitleg'), null);
                $gelukt = "Het nieuws item is succesvol toegevoegd aan de homepagine, dit zonder een foto";
            }
            //return view('personeel.newsitems',compact('newsItems','menuTop','gelukt'));
            return redirect()->action('Personeel_Controller@nieuwsItems');
        }


    }

    public function verwijderNieuwsItem($id){
        $news = new News_Model;
        $news->deleteNewsItem($id);
        $menuTop = "Nieuws Items";
        $newsItems = $this->getAllNews();
        $gelukt = "Het nieuws item is succesvol verwijdert";
        //File::delete($news->getPathOfNewsItemPicture($id));
        //return redirect()->action('Personeel_Controller@nieuweNieuwsItem');
        //return view('personeel.newsitems',compact('newsItems','menuTop', 'gelukt'));
        return redirect()->action('Personeel_Controller@nieuwsItems');
    }


    public function aanpassenNieuwsItem(Request $request){
        $news = new News_Model;

        $id = $request['itemId'];
        echo $id;

        echo $request['uitlegAanpassing'];
        if ($request['fotoAanpassing'] != null) {
            if (Input::file('fotoAanpassing')->isValid()) {
                $filename = Input::file('fotoAanpassing')->getClientOriginalName();
                Input::file('fotoAanpassing')->move('uploads', $filename);
                $news->updateNewsItem($id, Input::get('titelAanpassing'), Input::get('uitlegAanpassing'), $filename);
                $gelukt = "Het nieuws item is succesvol toegevoegd aan de homepagine, dit met een foto";
            }
        } else {
            $news->updateNewsItem($id, Input::get('titelAanpassing'), Input::get('uitlegAanpassing'), null);
            $gelukt = "Het nieuws item is succesvol toegevoegd aan de homepagine, dit zonder een foto";
        }
        $newsItems = $this->getAllNews();
        $menuTop = "Nieuws Items";
        $gelukt = "Het nieuws item is succesvol aangepast";
        //return view('personeel.newsitems',compact('newsItems','menuTop','gelukt'));
        return redirect()->action('Personeel_Controller@nieuwsItems');
    }

    //gallerij//
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
            return redirect('/personeel/foto')
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

        return view('personeel.galleryview',compact('menuTop'))->with('gallery',$gallery);
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