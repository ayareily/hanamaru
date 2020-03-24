<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlowerRequest;
use App\Flower;

class FlowerController extends Controller
{
    public function index() {
        return view('flowers.index');
    }

    public function create() {
        return view('flowers.create');
    }

    public function store(FlowerRequest $request, Flower $flower) {
        $flower->body = $request->body;
        $flower->save();
        return redirect()->route('home');
    }
}
