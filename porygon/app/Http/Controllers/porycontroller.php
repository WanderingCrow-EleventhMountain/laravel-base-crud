<?php

namespace App\Http\Controllers;

use App\Pory;
use Illuminate\Http\Request;

class porycontroller extends Controller
{
  public function index(){
    $poryDB = Pory::all();
    return view('layout', compact('poryDB'));
  }
}
