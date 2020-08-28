<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\ClientSalarie;
use App\Compte;
use App\CompteCourant;

class ClientSalarieController extends Controller
{
    public function ajoutsalarie()
    {
        return view ('clientSalarie.clientsalarie');
    }
    public function addClientSalarie(Request $request)
    {
        
        $client = new Client();
        $client->nom = $request->nom;
        $client->telephone = $request->telephone;
        $client->adresse = $request->adresse;
        $client->email = $request->email;

        $client->save();

        // $clientsalarie = new ClientSalarie();
        // $clientsalarie->clients_id = $client;
        // $clientsalarie->prenom = $request->prenom;
        // $clientsalarie->profession = $request->profession;
        // $clientsalarie->salaire = $request->salaire;
        // $clientsalarie->nomEntreprise = $request->nom_entreprise;
        // $clientsalarie->adresseEntreprise = $request->adresse_entreprise;
        // $clientsalarie->idEmployeur = $request->id_employeur;
        // $clientsalarie->carteIdentite = $request->carte_identite;
        // $clientsalarie->validiteCin = $request->validite_identite;

        // var_dump( $clientsalarie);
        // die;
        // $clientsalarie->save();


        return view ('clientSalarie.clientsalarie');
    }
}
