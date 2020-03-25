<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlowerRequest;
use App\Flower;

class FlowerController extends Controller
{
    public function index() {
        $flowers = Flower::all()->sortByDesc('created_at');

        return view('flowers.index', ['flowers' => $flowers]);
    }

    public function create() {
        return view('flowers.create');
    }

    public function store(FlowerRequest $request, Flower $flower) {
        $flower->fill($request->all());
        $flower->user_id = $request->user()->id;
        $flower->save();
        
        return redirect()->route('home');
    }

}
