<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripoviController extends Controller
{
    public function index() {
      return view('welcome');
    }

    public function trips() {
      return view('trips');
    }
}
