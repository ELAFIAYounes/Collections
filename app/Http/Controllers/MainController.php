<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    protected $integersData = [21,32,43,50];
    protected $objectsData = [
        ['column_1' => 30000,'column_2' => 400],
        ['column_1' => 20000,'column_2' => 400],
        ['column_1' => 10000,'column_2' => 400]
    ];

    public function integersAverage(){
        return  collect($this->integersData)->average();
    }

    public function objectsAverage(){
        return collect($this->objectsData)->average(function($value){
            return $value['column_1'] + $value['column_2'];
        });
    }
}
