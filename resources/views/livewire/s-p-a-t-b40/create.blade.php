
<div class="contents">

    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-12">
             <div class="shop-breadcrumb">

                <div class="breadcrumb-main">
                   <h4 class="text-capitalize breadcrumb-title">add New type User</h4>
                   <div class="breadcrumb-action justify-content-center flex-wrap">
                      <nav aria-label="breadcrumb">
                         <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>SPAIN43</a></li>
                            <li class="breadcrumb-item active" aria-current="page">add New type User</li>
                         </ol>
                      </nav>
                   </div>
                </div>

             </div>
          </div>
       </div>
    </div>
    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-12">
             <!-- Start: product page -->
             <div class="product-add global-shadow px-sm-30 py-sm-50 px-0 py-20 bg-white radius-xl w-100 mb-40">
                <div class="row justify-content-center">
                   <div class="col-xxl-7 col-lg-10">
                      <div class="mx-sm-30 mx-20 ">
                         <!-- Start: card -->
                         <div class="card add-product p-sm-30 p-20 mb-30">
                            <div class="card-body p-0">
                               <div class="card-header">
                                  <h6 class="fw-500">add New Personnal</h6>
                               </div>
                               <!-- Start: card body -->
                               <div class="add-product__body px-sm-40 px-20">
                                  <!-- Start: form -->

                                  <form>
                                     <!-- form group -->
                                     <div class="form-group">
                                        <label for="name1">ID Personnal</label>
                                        <input type="text" class="form-control" wire:model="idPers" id="name1" placeholder="ID">
                                     </div>

                                     <!-- form group 1 -->
                                     <div class="form-group">
                                        <label for="name2">Nom</label>
                                        <input type="text" class="form-control" wire:model="nom" id="name2" placeholder="Libellé">
                                     </div>

                                     <!-- form group 1 -->
                                     <div class="form-group">
                                        <label for="name2">Prenom</label>
                                        <input type="text" class="form-control" wire:model="prenom" id="name2" placeholder="Libellé">
                                     </div>

                                     <!-- form group 1 -->
                                     <div class="form-group">
                                        <label for="name2">Date Naissance</label>
                                        <input type="date" class="form-control" wire:model="dateNaissance" id="name2" placeholder="Date Naissance">
                                     </div>

                                     <!-- form group 1 -->
                                     <div class="form-group mb-25">
                                        <div class="countryOption">
                                           <label for="countryOption">
                                              Statuts
                                           </label>
                                           <select wire:model="status" class="js-example-basic-single js-states form-control">
                                                <option value="" selected hidden>Please Select</option>
                                                <option value="Actif">Actif</option>
                                                <option value="Off">Off</option>
                                           </select>
                                        </div>
                                     </div>

                                     <!-- form group 1 -->
                                     <div class="form-group mb-25">
                                        <div class="countryOption">
                                           <label for="countryOption">
                                              Sexe
                                           </label>
                                           <select wire:model="idSexe" class="js-example-basic-single js-states form-control">
                                            <option value="" selected hidden>Please Select</option>
                                            @foreach ($sexeList as $sexe)
                                                <option value="{{$sexe->idSexe}}">{{$sexe->NatureSexe}}</option>
                                            @endforeach
                                           </select>
                                        </div>
                                     </div>
                               </div>
                               <!-- End: card body -->
                            </div>
                         </div>
                         <!-- End: card -->

                         <!-- Start: button group -->
                         <div class="button-group add-product-btn d-flex justify-content-sm-end justify-content-center mt-40">

                            <a href="{{url('/SPAIN40')}}" class="btn btn-light btn-default btn-squared fw-400 text-capitalize">Cancel</a>

                            <a wire:click="addPersonnal" class="btn btn-primary btn-default btn-squared text-capitalize">Save</a>

                         </div>
                         <!-- End: button group -->
                      </div>
                   </div>
                   <!-- ends: col-lg-8 -->
                </div>
             </div>
             <!-- End: Product page -->
          </div>
          <!-- ends: col-lg-12 -->
       </div>
    </div>
 </div>
