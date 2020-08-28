<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientMoralController extends Controller
{
    public function ajoutmoral()
    {
        return view ('ClientMoral.clientmoral');
    }
}
