<?php

namespace App\Http\Controllers;

use App\pory;
use Illuminate\Http\Request;

class porycontroller extends Controller
{
  public function index(){
    $pory = pory::all();
    return view('layout', compact('pory'));
  }
}
