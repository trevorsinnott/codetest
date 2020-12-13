<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class CreateheroController extends Controller
{
    public function index()
    {
        return view('createhero');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'superHeroName' => 'required'
        ]);

        Hero::create([
            'superHeroName' => $request->superHeroName
        ]);
    }
}
