<div>
    <a href="{{route('SPATB41Create')}}">creer</a>
    <label for="">liste des sexes</label>
    {{$sexes}}
    @foreach($sexes as $sexe)
        <h2>{{$sexe->NatureSexe}}</h2>
        <h2>{{$sexe->idSexe}}</h2>
        <a href="{{url('/SPATB41/edit/'.$sexe->idSexe)}}">modifier</a>
        <button wire:click="destroy({{$sexe->idSexe}})">sup</button>
    @endforeach
</div>
