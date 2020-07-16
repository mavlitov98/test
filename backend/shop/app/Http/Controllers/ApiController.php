<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ApiController extends Controller
{
    public function createClient(Request $request){

        $clients = new Client();
        $clients->name = $request->input('name');
        $clients->email = $request->input('email');
        $clients->phone = $request->input('phone');
        $clients->address = $request->input('address');
        $clients->day = $request->input('day');
        $clients->rate = $request->input('rate');

        $clients->save();
        return response()->json($clients);

    }

    public function getOrders(){

        $orders = Client::All();
        return response()->json($orders);

    }

    public function getOrderByID($id){

        $order = Client::find($id);
        return response()->json($order);

    }



}
