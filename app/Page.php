<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function getPage($page){
        switch ($page){
            case 'home':
                return '<h1>TEST</h1>';
                break;
        }
    }
}
