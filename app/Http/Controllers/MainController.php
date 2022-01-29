<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public $integerData = [21,32,43,50];

    public function average(){
        return  collect($this->integerData)->average();
    }
}
