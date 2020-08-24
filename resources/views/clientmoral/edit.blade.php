@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulaire de modification des clients morals') }}</div>

                <div class="card-body">
                  @if(isset($confirmation))
                       @if($confirmation == 1)
                          <div class="alert alert-success">Client moral modifié avec succes</div>
                       @else
                          <div class="alert alert-danger">Echec de la modification du client moral</div>
                       @endif
                  @endif
                  <form method="post" action="{{ route('updateclientmoral') }}">
                  @csrf
                        <div class="form-group">
                            <label class="control-label" for="id">Identifiant du client moral</label>
                        <input class="form-control" readonly="true" name="id" id="id" value="{{ $clientmoral->id }}" />
                        </div>
                        <div class="form-group">
                                <label class="control-label" for="nomentreprise">Nom de l'entreprise</label>
                                <input class="form-control" type="text" name="nomentreprise" id="nomentreprise" value="{{ $clientmoral->nomentreprise }}"/>
                        </div>

                        <div class="form-group">
                                <label class="control-label" for="adresseentreprise">Adresse de l'entreprise</label>
                                <input class="form-control" type="text" name="adresseentreprise" id="adresseentreprise" value="{{ $clientmoral->adresseentreprise }}"/>
                        </div>

                        <div class="form-group">
                                <label class="control-label" for="raisonsocial">Raison Social</label>
                                <input class="form-control" type="text" name="raisonsocial" id="raisonsocial" value="{{ $clientmoral->raisonsocial }}" />
                        </div>

                        <div class="form-group">
                                <label class="control-label" for="numident">Numero d'identification</label>
                                <input class="form-control" type="text" name="numident" id="numident" value="{{ $clientmoral->numident }}" />
                        </div>

                        <div class="form-group">
                                <input class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Envoyer" />
                                <input class="btn btn-danger" type="reset" name="annuler" id="annuler" value="Annuler" />
                        </div>
                   </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection