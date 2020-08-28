<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompteCourant extends Model
{
    protected $fillable = array('comptes_id', 'nomEmployeur', 'adresseEmployeur', 'raisonSocial');
    public static $rules = array(
       'comptes_id' => 'required|integer',
       'nomEmployeur' => 'required|min:3',
       'adresseEmployeur' => 'required|min:2',
       'raisonSocial' => 'required|min:2'
    );
    public function courant()
    {
       return $this->belongsTo('App\Compte');
    }
}
