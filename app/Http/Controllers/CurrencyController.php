<?php

namespace App\Http\Controllers;

use AkibTanjim\Currency\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function rates(){
        $response = Currency::getRates();
        return response()->json($response);
    }

    public function single(){
        $response = Currency::convert('USD','BDT',10);
        return response()->json($response);
    }

    public function multiple(){
        $response = Currency::convert('USD',['BDT','JPY','AUD'],10);
        return response()->json($response);
    }
}
