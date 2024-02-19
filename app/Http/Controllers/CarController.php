<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{

   public function carIndex(){
    $cars = [
        ['name'=>'Audi ', 'model'=>'A4' ,'condition'=>'Nuova','img'=>''],
        ['name'=>'Fiat ', 'model'=>'147' ,'condition'=>'Molto usata','img'=>''],
        ['name'=>'Mercedes ', 'model'=>'Classe G' ,'condition'=>'Nuova','img'=>''],
        ['name'=>'Subaru ', 'model'=>'Sv Baracca' ,'condition'=>'Nuova di pacca','img'=>''],
        ['name'=>'Range Rover ', 'model'=>'Evoque' ,'condition'=>'Usata','img'=>''],
        ['name'=>'Volvo ', 'model'=>'FH' ,'condition'=>'Usata','img'=>''],

    ];
    return view('car.index', ['cars'=> $cars]);
   }
}
