<div class="form-group mb-25">
    <div class="countryOption">
       <label for="countryOption">
          Ville
       </label>
       <select class="js-example-basic-single js-states form-control">
        <option value="" selected disabled>Please Select</option>
        @foreach ($exportationList as $exportation)
            <option value="{{$exportation->SPATB34->id}}">{{$exportation->SPATB34->libelle}}</option>
        @endforeach
       </select>
    </div>
 </div>
