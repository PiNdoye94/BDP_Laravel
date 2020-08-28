<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientSalarie extends Model
{
    protected $fillable = array('clients_id', 'prenom', 'profession', 'salaire', 'nomEntreprise', 'adresseEntreprise', 'idEmployeur', 'carteIdentite', 'validiteCin');
    public static $rules = array(
       'clients_id' => 'required|integer',
       'prenom' => 'required|min:3',
       'profession' => 'required|min:9',
       'salaire' => 'required|min:2',
       'nomEntreprise' => 'required|min:2',
       'adresseEntreprise' => 'required|min:2',
       'idEmployeur' => 'required|min:2',
       'carteIdentite' => 'required|min:13',
       'validiteCin' => 'required'

    );
    public function salarie()
    {
       return $this->belongsTo('App\Client');
    }
}
