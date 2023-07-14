<div>
    <a href="{{ route('SPAIN01create') }}">créer un contrat</a>
    {{$contrats}}
    
    @foreach ($contrats as $newcontrat)
        <h2>{{ $newcontrat->idContrat }}</h2>
        <h2>{{ $newcontrat->DteContrat }}</h2>
        <h2>{{ $newcontrat->DureeContrat }}</h2>
        <h2>{{ $newcontrat->idParcelle }}</h2>
        <h2>{{ $newcontrat->idTypeContrat }}</h2>
        <a href="{{ url('/SPAIN01/edit/'.$newcontrat->idContrat) }}">modifier</a>
        <button wire:click="destroy({{$newcontrat->idContrat}})">supprimer</button>
    @endforeach
</div>

