<?php

namespace App\Http\Controllers;

use App\Rospetto;
use Illuminate\Http\Request;

class RospettiController extends Controller
{
    public function index(){

      $rospetti = Rospetto::all();

      return view('home', compact('rospetti'));
    }

    public function show($id){
      $rospetto = Rospetto::findOrFail($id);

      return view('rospo-show', compact('rospetto'));

    }

    public function edit($id){
      $rospetto = Rospetto::findOrFail($id);

      return view('rospo-edit', compact('rospetto'));
    }

    public function update(Request $request, $id){

      // dd($request -> all());

      $validatedData = $request -> validate([
        'name' => 'required|between:2,12|alpha',
        'color' => 'required',
        'weight' => 'required|integer',
        'dateOfBirth' => 'required|date'

      ]);
      $rospetto = Rospetto::findOrFail($id);

      $rospetto -> name = $validatedData['name'];
      $rospetto -> color = $validatedData['color'];
      $rospetto -> weight = $validatedData['weight'];
      $rospetto -> dateOfBirth = $validatedData['dateOfBirth'];

      $rospetto -> save();

      return redirect()
                -> route('show', $id)
                -> withSuccess("Updated "
                          . $rospetto['name']
                          . " successfully!!!");
    }

    public function delete($id){

      $rospetto = Rospetto::findOrFail($id);
      $rospetto -> delete();

      return redirect()
                -> route('home')
                -> withSuccess($rospetto['name']
                            . " successfully eliminated");
    }

    public function create() {

      return view('rospo-create');
    }

    public function store(Request $request){

      // dd($request -> all());

      $validatedData = $request -> validate([
        'name' => 'required|between:2,12|alpha',
        'color' => 'required',
        'weight' => 'required|integer',
        'dateOfBirth' => 'required|date'

      ]);
      $rospetto = new Rospetto;

      $rospetto -> name = $validatedData['name'];
      $rospetto -> color = $validatedData['color'];
      $rospetto -> weight = $validatedData['weight'];
      $rospetto -> dateOfBirth = $validatedData['dateOfBirth'];

      $rospetto -> save();

      return redirect()
                -> route('home')
                -> withSuccess($rospetto['name']
                          . " created successfully!!!");
    }
}
