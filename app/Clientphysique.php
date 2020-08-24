<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientphysique extends Model
{
    protected $fillable = array('numcni', 'nom', 'prenom','datenaissance', 'civilite','adresse', 'email', 'telephone');
    public static $rules = array('numcni' => 'required|min:16',
                                 'nom' => 'required|min:12',
                                 'prenom' => 'required|min:15',
                                 'datenaissance' => 'required|min:12',
                                 'civilite' => 'required|min:10',
                                 'adresse' => 'required|min:15',
                                 'email' => 'required|min:20',
                                 'telephone' => 'required|min:12'
                                );
    public function compte() {
        return $this->hasMany('App\Compte');
    }
}
