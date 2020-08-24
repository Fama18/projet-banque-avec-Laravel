<?php

namespace App\Http\Controllers;

use App\Clientmoral;
use Illuminate\Http\Request;

class ClientmoralController extends Controller
{
    public function add() {
        return view('clientmoral.add');
    }
    public function getAll() {
        $liste_clientmorals = Clientmoral::all();
        return view('clientmoral.list', ['liste_clientmorals' => $liste_clientmorals]);
    }
    public function edit($id) {
        return view('clientmoral.edit');
    }
    public function update() {
        return $this->getAll();
    }
    public function delete($id) {
        return $this->getAll();
    }
    public function persist(Request $request) {
        $clientmoral = new Clientmoral();
        $clientmoral->nomentreprise = $request->nomentreprise;
        $clientmoral->adresseentreprise = $request->adresseentreprise;
        $clientmoral->raisonsocial = $request->raisonsocial;
        $clientmoral->numident = $request->numident;

        $result = $clientmoral->save();

        return view('clientmoral.add', ['confirmation' => $result]);
    }
}
