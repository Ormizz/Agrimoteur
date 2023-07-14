<div class="contents">

    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-12">
             <div class="contact-breadcrumb">

                <div class="breadcrumb-main add-contact justify-content-sm-between ">
                   <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                      <div class="d-flex align-items-center add-contact__title justify-content-center me-sm-25">
                         <h4 class="text-capitalize fw-500 breadcrumb-title">Data List</h4>
                         <span class="sub-title ms-sm-25 ps-sm-25"></span>
                      </div>
                      <div class="action-btn mt-sm-0 mt-15">
                         <a href="{{route('SPAIN44Create')}}" class="btn px-20 btn-primary ">
                            <i class="las la-plus fs-16"></i>Add New Function
                         </a>
                      </div>
                   </div>
                   <div class="breadcrumb-main__wrapper">

                      <form action="/" class="d-flex align-items-center add-contact__form my-sm-0 my-2">
                         <img src="img/svg/search.svg" alt="search" class="svg">
                         <input class="form-control me-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                      </form>

                   </div>
                </div>

             </div>
             <!-- ends: contact-breadcrumb -->
          </div>
       </div>
       <div class="row">
          <div class="col-lg-12 mb-30">
             <div class="card">
                <div class="card-header color-dark fw-500">
                   Function List
                </div>
                <div class="card-body">

                   <div class="userDatatable global-shadow border-light-0 w-100">
                      <div class="table-responsive">
                         <table class="table mb-0 table-borderless">
                            <thead>
                               <tr class="userDatatable-header">
                                  <th>
                                     <div class="d-flex align-items-center">
                                        <div class="custom-checkbox  check-all">
                                           <input class="checkbox" type="checkbox" id="check-45">
                                           <label for="check-45">
                                              <span class="checkbox-text userDatatable-title">ID</span>
                                           </label>
                                        </div>
                                     </div>
                                   </th>
                                   <th>
                                       <span class="userDatatable-title">Libellé</span>
                                   </th>
                                   <th>
                                       <span class="userDatatable-title">Créer à</span>
                                   </th>
                                   <th>
                                       <span class="userDatatable-title">Modifié à</span>
                                   </th>
                                   <th>
                                       <span class="userDatatable-title float-end">action</span>
                                   </th>
                               </tr>
                            </thead>
                            <tbody>
                                @foreach($functionList as $Function)
                               <tr>
                                  <td>
                                     <div class="d-flex">
                                        <div class="userDatatable__imgWrapper d-flex align-items-center">
                                           <div class="checkbox-group-wrapper">
                                              <div class="checkbox-group d-flex">
                                                 <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-9">
                                                    <label for="check-grp-9"></label>
                                                 </div>
                                              </div>
                                           </div>

                                        </div>
                                        <div class="userDatatable-inline-title">
                                           <a href="#" class="text-dark fw-500">
                                              <h6>{{$Function->idFunction}}</h6>
                                           </a>
                                        </div>
                                     </div>
                                  </td>
                                  <td>
                                     <div class="userDatatable-content">
                                        {{$Function->LibFonctions}}
                                     </div>
                                  </td>
                                  <td>
                                     <div class="userDatatable-content">
                                        {{$Function->created_at}}
                                     </div>
                                  </td>
                                  <td>
                                     <div class="userDatatable-content">
                                        {{$Function->updated_at}}
                                     </div>
                                  </td>
                                  <td>
                                     <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                        <li>
                                           <a href="#" class="view">
                                              <i class="uil uil-eye"></i>
                                           </a>
                                        </li>
                                        <li>
                                           <a href="{{url('/SPAIN44/edit/'.$Function->idFunction)}}" class="edit">
                                              <i class="uil uil-edit"></i>
                                           </a>
                                        </li>
                                        <li>
                                           <a wire:click="destroy({{$Function}})" class="remove">
                                              <i class="uil uil-trash-alt"></i>
                                           </a>
                                        </li>
                                     </ul>
                                  </td>
                               </tr>
                               @endforeach
                            </tbody>
                         </table>
                      </div>
                   </div>

                   <div class="d-flex justify-content-sm-end justify-content-start pt-25">

                      <nav class="dm-page ">
                         <ul class="dm-pagination d-flex">
                            <li class="dm-pagination__item">
                               <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                               <a href="#" class="dm-pagination__link"><span class="page-number">1</span></a>
                               <a href="#" class="dm-pagination__link active"><span class="page-number">2</span></a>
                               <a href="#" class="dm-pagination__link"><span class="page-number">3</span></a>
                               <a href="#" class="dm-pagination__link pagination-control"><span class="page-number">...</span></a>
                               <a href="#" class="dm-pagination__link"><span class="page-number">12</span></a>
                               <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                               <a href="#" class="dm-pagination__option">
                               </a>
                            </li>
                            <li class="dm-pagination__item">
                               <div class="paging-option">
                                  <select name="page-number" class="page-selection">
                                     <option value="20">20/page</option>
                                     <option value="40">40/page</option>
                                     <option value="60">60/page</option>
                                  </select>
                               </div>
                            </li>
                         </ul>
                      </nav>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
