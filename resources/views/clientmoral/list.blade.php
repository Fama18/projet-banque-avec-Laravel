@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Liste des clients morals') }}</div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                       <tr>
                           <th>Id client moral</th>
                           <th>Nom de l'entreprise</th>
                           <th>Adresse Entreprise</th>
                           <th>Raison Social</th>
                           <th>Numero d'identification</th>
                           <th>Action</th>
                           <th>Action</th>
                       </tr>
                       @foreach($liste_clientmorals as $clientmoral)
                           <tr>
                               <td>{{ $clientmoral->id }}</td>
                               <td>{{ $clientmoral->nomentreprise }}</td>
                               <td>{{ $clientmoral->adresseentreprise }}</td>
                               <td>{{ $clientmoral->raisonsocial }}</td>
                               <td>{{ $clientmoral->numident }}</td>
                               <td><a href="{{ route('editclientmoral', ['id'=>$clientmoral->id]) }}">Editer</a></td>
                               <td><a href="{{ route('deleteclientmoral', ['id'=>$clientmoral->id]) }}">Supprimer</a></td>
                           </tr>
                       @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
