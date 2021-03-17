<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

class Lista extends Controller {

public function goPage() {

      $cars = Car::all();
      $id = Car::where('id',1)->get();

      return view('cars-list',['cars'=>$cars], ['id' =>$id]);

  }


}
