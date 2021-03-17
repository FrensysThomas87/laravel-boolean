<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lista extends Controller
{
    public function goPage(){
      return view('cars-list');
    }
}
