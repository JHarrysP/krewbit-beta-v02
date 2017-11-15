<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Card;

class CardController extends Controller
{
    public function index(){


    	// $cards = Card::all();


    	return view('pages.landing');

    }
}
