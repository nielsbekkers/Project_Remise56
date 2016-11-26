<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;


class Content_Model extends Model
{
    public function getTemplateNames($paginaNaam) {
        $pagina = DB::select('SELECT * FROM paginas WHERE paginaNaam=?',[$paginaNaam]);
        return $pagina == null ? false : $pagina[0]->templates;
    }
    public function getContentFor($template) {
        $aGeg = DB::select('SELECT * FROM templates_inhoud WHERE templateNaam=?',[$template]);
        if($aGeg != null) {
            foreach (explode(';', $aGeg[0]->templateInhoud) as $aItems) {
                $a = explode(':', $aItems);
                $aGegevens[$a[0]] = $a[1];
            }
        } else {
            return false;
        }
        return $aGegevens;
    }
}
