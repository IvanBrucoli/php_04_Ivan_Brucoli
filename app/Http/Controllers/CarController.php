<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use Illuminate\Support\Facades\Auth;

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

    public function store(CarRequest $request){

        //!MASS ASSIGNMENT

        $car= Car::create([
            'name'=> $request->name,
            'model'=> $request->model,
            'condition' => $request->condition,
            'price' => $request->price,
            'image'=> $request->file('image')->store('public/images'),
            'user_id'=> Auth::user()->id,
        ]);

        return redirect()->route('homepage')->with('success','Hai salvato la macchina in piattaforma');
    }
}

