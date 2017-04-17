<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FruitsController extends Controller
{

    public function new(){
      return view('fruits.new');
    }

    public function store(Request $request){

      $fruit = new \App\Fruit();

      $fruit->name = $request->name;
      $fruit->price = $request->price;
      $fruit->expiration_date = $request->expiration_date;
      $fruit->photo = $request->photo;

      $this->validate($request, [
        'name' => 'required',
        'price' => 'required',
        'expiration_date' => 'required'
      ]);

      $fruit->save();
      return view('fruits.new')->withFruit($fruit);
    }

    public function fruits(){
      $fruits = DB::table('fruits')->select('*')->get();
      return view('fruits.fruits', compact('fruits'));
    }

    public function show($id){
      $fruit = DB::table('fruits')->where('id', '=', $id)->first();
      return view('fruits.show', compact('fruit'));
    }

    public function js(){
        return view('fruits.jazz');
    }
}
