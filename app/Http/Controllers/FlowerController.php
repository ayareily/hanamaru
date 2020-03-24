<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlowerController extends Controller
{
    public function index() {
        return view('flowers.index');
    }

    public function create() {
        return view('flowers.create');
    }

    public function store() {
        
    }
}
