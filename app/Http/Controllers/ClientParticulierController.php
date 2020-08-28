<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientParticulierController extends Controller
{
    public function ajoutparticulier()
    {
        return view ('ClientParticulier.clientparticulier');
    }
    
}
