<div>
    <a href="{{route('SPAIN03create')}}">creer un modele paiement/a>
    <label for="">liste des modeles de paiement</label>
    {{$modelespaiements}}
     @foreach($modelespaiements as $newmodelepaiement)
        <h2>{{$newmodelepaiement->idModelePaiement}}</h2>
        <h2>{{$newmodelepaiement->LibModelePaiement}}</h2>
        <a href="{{url('/SPAIN03/edit/'.$newmodelepaiement->idModelePaiement)}}">modifier</a>
        <button wire:click="destroy({{$newmodelepaiement->idModelePaiement})">supprimer</button>
    @endforeach
</div>