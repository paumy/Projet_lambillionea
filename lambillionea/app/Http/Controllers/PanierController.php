<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PanierController extends Controller
{
    public function panier(){
         return view('Panier.panier');
    }
}
