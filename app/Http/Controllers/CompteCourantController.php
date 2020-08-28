<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteCourantController extends Controller
{
    public function add()
    {
        return view ('compteCourant.add');
    }
}
