<?php

namespace App\Http\Controllers;

use App\Models\Car;
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
    public function create(){
        return view('car.create');
    }

    public function store(Request $request){
        // $car = new Car();
        // $car->name = $request->name;
        // $car->model = $request->model;
        // $car->condition = $request->condition;
        // $car->price= $request->price;
        // $car->save();

        //!MASS ASSIGNMENT

        $car= Car::create([
            'name'=> $request->name,
            'model'=> $request->model,
            'condition' => $request->condition,
            'price' => $request->price,
        ]);

        return redirect()->route('homepage')->with('success','Hai salvato la macchina in piattaforma');
    }
}

