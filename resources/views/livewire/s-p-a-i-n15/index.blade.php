<div>
    {{-- The Master doesn't talk, he acts. --}}

    {{-- Care about people's approval and you will be their prisoner. --}}

   
<label for="">liste des parcelles</label>
@foreach($Locapa as $loc)
    <h2>{{$loc->Localisation}}</h2>
    
    <a href="{{url('/SPAIN15/edit/'.$loc->Localisation)}}">modifier</a>
    
@endforeach
</div>
