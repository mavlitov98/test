<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rates;
class RateController extends Controller
{
    public function getRates(){

        $data = Rates::All();
        return response()->json($data);
    }

    public function getRatesByID($id){

        $data = Rates::find($id);
        return response()->json($data);
    }


}
