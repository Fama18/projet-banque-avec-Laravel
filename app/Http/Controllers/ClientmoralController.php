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
        $liste_clientmorals = Clientmoral::paginate(2);
        //$liste_clientmorals = Clientmoral::all();
        return view('clientmoral.list', ['liste_clientmorals' => $liste_clientmorals]);
    }
    public function edit($id) {
        $clientmoral = Clientmoral::find($id);
        return view('clientmoral.edit', ['clientmoral'=>$clientmoral]);
    }
    public function update(Request $request) {
        $clientmoral = Clientmoral::find($request->id);
        $clientmoral->nomentreprise = $request->nomentreprise;
        $clientmoral->adresseentreprise = $request->adresseentreprise;
        $clientmoral->raisonsocial = $request->raisonsocial;
        $clientmoral->numident = $request->numident;

        $result = $clientmoral->save();
        return $this->getAll();
    }
    public function delete($id) {
        $clientmoral = Clientmoral::find($id);
        if( $clientmoral!= null ) {
            $clientmoral->delete();
        }
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
