<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientphysiqueController extends Controller
{
    public function add() {
        return view('clientphysique.add');
    }
    public function getAll() {
        return view('clientphysique.list');
    }
    public function edit($id) {
        return view('clientphysique.edit');
    }
    public function update() {
        return $this->getAll();
    }
    public function delete($id) {
        return $this->getAll();
    }
}
