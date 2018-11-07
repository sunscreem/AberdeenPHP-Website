<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PizzaTopping;

class PizzaController extends Controller
{
    public function index()
    {
        return view('pages.pizza');
    }

    public function search(Request $request)
    {
    //    $results = ['test1','test2','test3'];
    //   $results = PizzaTopping::where('topping', 'like', '%' . $request->input('q') . '%')->pluck('topping');
        $results = PizzaTopping::search($request->input('q'))->get()->pluck('topping');

        return view('pages.pizza')->with(compact('results'));
    }

}



























