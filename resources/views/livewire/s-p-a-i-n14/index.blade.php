<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

   
    <label for="">liste des calibres</label>
    @foreach($Calibres as $cal)
        <h2>{{$cal->LibCalibre}}</h2>
        
        <a href="{{url('/SPAIN14/edit/'.$cal->LibCalibre)}}">modifier</a>
        
    @endforeach
</div>

