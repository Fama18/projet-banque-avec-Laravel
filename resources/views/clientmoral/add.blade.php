@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulaire d"enregistrement des clients morals') }}</div>

                <div class="card-body">
                  @if(isset($confirmation))
                       @if($confirmation == 1)
                          <div class="alert alert-success">Client moral ajouté avec succes</div>
                       @else
                          <div class="alert alert-danger">Echec de l'ajout du client moral</div>
                       @endif
                  @endif
                  <form method="post" action="{{ route('persistclientmoral') }}">
                  @csrf
                        <div class="form-group">
                                <label class="control-label" for="nomentreprise">Nom de l'entreprise</label>
                                <input class="form-control" type="text" name="nomentreprise" id="nomentreprise" />
                        </div>

                        <div class="form-group">
                                <label class="control-label" for="adresseentreprise">Adresse de l'entreprise</label>
                                <input class="form-control" type="text" name="adresseentreprise" id="adresseentreprise" />
                        </div>

                        <div class="form-group">
                                <label class="control-label" for="raisonsocial">Raison Social</label>
                                <input class="form-control" type="text" name="raisonsocial" id="raisonsocial" />
                        </div>

                        <div class="form-group">
                                <label class="control-label" for="numident">Numero d'identification</label>
                                <input class="form-control" type="text" name="numident" id="numident" />
                        </div>

                        <div class="form-group">
                                <input class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Envoyer" />
                        <a class="btn btn-danger" href="{{ route('getAllclientmoral') }}">Annuler</a>
                        </div>
                   </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
