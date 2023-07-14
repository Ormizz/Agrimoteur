<div>
<a href="{{route('SPAIN12create')}}">creer</a>
    <label for="">liste des produits phytosanitaire</label>
    {{$produitsphyto}}
    @foreach($produitsphyto as $newproduitphyto)
        <h2>{{$newproduitphyto->LibProduitPhyto}}</h2>
        <button wire:click="destroy({{$newproduitphyto->LibProduitPhyto}})">sup</button>
        <a href="{{url('/SPAIN12/edit/'.$newproduitphyto->LibProduitPhyto)}}">modifier</a>
    @endforeach
</div>
