<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = array('clientmorals_id', 'clientphysiques_id', 'numeroagence', 'numerocompte', 'clerib');
    public static $rules = array('clientmorals_id' => 'required|bigInteger',
                                 'clientphysiques_id' => 'required|bigInteger',
                                 'numeroagence' => 'required|min:16',
                                 'numerocompte' => 'required|min:16',
                                 'clerib' => 'required|min:10'
                                );
    public function clientm() {
        return $this->belongsTo('App\Clientmoral');
    }
    public function clientp() {
        return $this->belongsTo('App\Clientphysique');
    }
}
