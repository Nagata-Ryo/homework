<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhiskyController extends Controller
{
  public function index(){

    return view('whisky.index');

}
}
