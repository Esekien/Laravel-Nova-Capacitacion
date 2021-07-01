<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class Inicio extends Controller
{
    //
    public function index(){

        $ropas = App\Models\Ropa::all()->sortByDesc('id');
        return view('inicio',compact('ropas'));
    }
}
