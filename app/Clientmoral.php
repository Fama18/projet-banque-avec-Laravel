<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientmoral extends Model
{
    protected $fillable = array('nomentreprise', 'adresseentreprise', 'raisonsocial', 'numident');
    public static $rules = array('nomentreprise' => 'required|min:12',
                                 'adresseentreprise' => 'required|min:12',
                                 'raisonsocial' => 'required|min:12',
                                 'numident' => 'required|min:12'
                                );
    public function compte() {
        return $this->hasMany('App\Compte');
    }
}
