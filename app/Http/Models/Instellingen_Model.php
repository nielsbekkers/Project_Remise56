<?php
/**
 * Created by PhpStorm.
 * User: Soufiane
 * Date: 16/11/2016
 * Time: 23:18
 */
namespace App\Http\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/////////////////////////       Dit Model bevat alle methodes voor het aanmaken, opvragen van Instellingen zoals sluitingsdagen, Categorieën voor menuitems en Openingsuren.
class Instellingen_Model extends Model implements  Authenticatable
{
    use \Illuminate\Auth\Authenticatable;


    public function nieuweSluitingsdag(Request $request){
        $dDatum = $request["frmNieuweSluitingsdagDatum"];
        $sTitel = $request["frmNieuweSluitingsdagTitel"];
        $sBeschrijving = $request["frmNieuweSluitingsdagBeschrijving"];
        $bActief = false;

        if ($request["frmNieuweSluitingsdagActief"] == "true"){
            $bActief = true;
        }
        else{
            $bActief = false;

        }


        try {
            DB::insert('insert into sluitingsdag (datum, titel, beschrijving, actief ) values (?, ?, ?, ?)', array($dDatum, $sTitel, $sBeschrijving, $bActief));
            $bResultaat = true;
        } catch (\PDOException $e) {
            $bResultaat = false;
        }
        return $bResultaat;
    }

    public function getAlleSluitingsdagen(){

        $errorReport = "";
        $aDagen = [];
        try {
            $aDagen = DB::select('select * from sluitingsdag', [1]);
        } catch (\PDOException $e) {
            $aDagen = [];
            $errorReport = "Kan geen verbinding maken met de database";
        }

        if (!empty($aDagen)){
            return $aDagen;
        }
        else{
            return $errorReport;
        }

    }

    public function deleteSluitingsdag(Request $request){
        $id = $request["frmDeleteSluitingsdagId"];
        try{
            DB::table('sluitingsdag')->where('id','=',$id)->delete();
            return true;
        }
        catch (\PDOException $e){
            return false;
        }
    }

    public function wijzigSluitingsdag(Request $request,$id){
        $sNaam = $request["frmNieuwPersoneelNaam"];
        $sGebruikersnaam = $request["frmNieuwPersoneelGebruikersnaam"];
        $sWachtwoord = bcrypt($request["frmNieuwPersoneelWachtwoord"]);

        try {
            DB::table('personeel')->where('id','=',$id)->update(
                ['naam'=> $sNaam,'gebruikersnaam' => $sGebruikersnaam,'wachtwoord' => $sWachtwoord]
            );
            $bResultaat = true;
        } catch (\PDOException $e) {
            $bResultaat = false;
        }
        return $bResultaat;
    }

    public function nieuweCategorie(Request $request){
        $sKeuze = $request["frmNieuweCategorieKeuze"];
        $sTitel = $request["frmNieuweCategorieTitel"];
        $sBijhorend = $request["frmNieuweCategorieBijhorend"];

        var_dump($sTitel, $sKeuze, $sBijhorend);

        if ($sKeuze == "categorie"){
            try{
                DB::insert('insert into menuitem_categorie (categorie) values (?)', array($sTitel));
                return true;
            }
            catch (\PDOException $e){
                var_dump($e);
                return false;
            }
        }elseif ($sKeuze == "subcategorie"){
            try{

                DB::insert('insert into menuitem_subcategorie (subcategorie, categorie_id) values (?,?)', array($sTitel, $sBijhorend));
                return true;
            }
            catch (\PDOException $e){
                return false;
            }
        }
    }

    public function deleteCategorie(Request $request){
        $id = $request["frmDeleteCategorieModalId"];
        $soort = $request["frmDeleteCategorieModalSoort"];


        if ($soort == "categorie"){
            try{
                DB::table('menuitem_categorie')->where('id','=',$id)->delete();
                return true;
            }
            catch (\PDOException $e){
                return false;
            }
        }elseif ($soort == "subcategorie"){
            try{
                DB::table('menuitem_subcategorie')->where('id','=',$id)->delete();
                return true;
            }
            catch (\PDOException $e){
                return false;
            }
        }

    }



}