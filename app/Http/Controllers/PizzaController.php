<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        return view('pages.pizza');
    }

    public function search()
    {
        $results = ['test1','test2','test3'];

        return view('pages.pizza')->with(compact('results'));
    }

}
