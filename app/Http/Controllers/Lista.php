<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

class Lista extends Controller {

public function goPage() {

      $cars = Car::all();
      dump($cars);
      return view('cars-list',['cars'=>$cars]);

  }


}
