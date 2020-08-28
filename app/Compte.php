<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = array('clients_id', 'numeroCompte', 'numeroAgence', 'cleRib', 'dateOuverture', 'solde');
    public static $rules = array(
       'clients_id' => 'required|integer',
       'nonumeroComptem' => 'required|min:2',
       'numeroAgence' => 'required|min:2',
       'cleRib' => 'required|min:2',
       'dateOuverture' => 'required|min:2',
       'solde' => 'required|min:1'
    );
    public function compte()
    {
       return $this->belongsTo('App\Client');
    }

    public function courant()
    {
       return $this->hasOne('App\CompteCourant');
    }
}
