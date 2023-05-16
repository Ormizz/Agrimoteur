<div>
    <a href="{{route('SPAIN43Create')}}">Creer un type utilisateur</a>
    liste des types user
    <div>
        @foreach ($typeuserlist as $typeuser)
            {{$typeuser}}
            <a href="{{url('/SPAIN43/edit/'.$typeuser->idTypeUtilisateur)}}">modifier</a>
        <button wire:click="destroy({{$typeuser->idTypeUtilisateur}})">sup</button>
        @endforeach
    </div>
</div>
