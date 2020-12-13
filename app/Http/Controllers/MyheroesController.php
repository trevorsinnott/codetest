<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyheroesController extends Controller
{
    public function index()
    {
        return view('myheroes');
    }
}
