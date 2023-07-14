<div>
    <a href="{{route('SPAIN02create')}}">creer un type de contrat</a>
    <label for="">liste des types de contrats</label>
    {{$typescontrats}}
     @foreach($typescontrats as $newtypecontrat)
        <h2>{{$newtypecontrat->idTypeContrat}}</h2>
        <h2>{{$newtypecontrat->LibTypeContrat}}</h2>
        <a href="{{url('/SPAIN02/edit/'.$newtypecontrat->idTypeContrat)}}">modifier</a>
        <button wire:click="destroy({{$newtypecontrat->idTypeContrat})">supprimer</button>
    @endforeach
</div>
