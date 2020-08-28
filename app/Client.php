<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
   protected $fillable = array('nom', 'telephone', 'adresse', 'email');
   public static $rules = array(
       'nom' => 'required|min:2',
       'telephone' => 'required|min:9',
       'adresse' => 'required|min:5',
       'email' => 'required|min:15'
   );
   public function compte()
   {
       return $this->hasMany('App\Compte');
   }

   public function salarie()
   {
       return $this->hasOne('App\ClientSalarie');
   }

}
