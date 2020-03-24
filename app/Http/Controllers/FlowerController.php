<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlowerRequest;
use App\Flower;

class FlowerController extends Controller
{
    public function index() {
        $flowers = Flower::all();

        return view('flowers.index', compact('flowers'));
    }

    public function create() {
        return view('flowers.create');
    }

    public function store() {
        $inputs = \Request::all();
        Flower::create($inputs);
        
        //$flower->body = $request->body;
        //$flower->save();
        
        return redirect()->route('home');
    }

}
