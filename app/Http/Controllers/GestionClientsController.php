<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\ClientSalarie;
use App\Compte;
use App\CompteCourant;

class GestionClientsController extends Controller
{
    public function getAll()
    {
        $Listeclients =  Client::all();
        //methode pagination en laravel
        //$Listeclients =  Client::paginate(5);
        return view ('GestionClients.gestionclients', ['Listeclients' => $Listeclients]);
    }
    public function get($id)
    {
        return view ('client.edit');
    }
    public function update()
    {
        return $this->getAll();
    }
    public function delete($id)
    {
        $compte = Compte::findBy('clients_id', $id);
        $client = Client::find($id);
        if( $client != null)
        {
            $client->delete();
        }
        return $this->getAll();
    }
}
