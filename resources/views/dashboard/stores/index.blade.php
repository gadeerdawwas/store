@extends('dashboard.include.layout')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid ">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="">
            {{-- <h6 class="h2 text-white d-inline-block mb-0"></h6> --}}
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">لوحة تحكم</a></li>
                <li class="breadcrumb-item active" aria-current="page">جدول اصحاب المتاجر </li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!-- Card stats -->
        <div class="row">
            <div class="col">
              <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                  <h3 class="mb-0" style="    float: right;">جدول اصحاب المتاجر</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                  <table class="table align-items-center table-flush text-center">
                    <thead class="thead-light">
                      <tr>
                        <th style="padding: 0"> اسم صاحب المتجر </th>
                        <th >اسم المتجر </th>
                        <th >الإيميل</th>
                        <th >رقم التلفون</th>
                        {{-- <th > ايبان البنك </th> --}}
                        <th >اسم المستخدم</th>
                        {{-- <th> حسابات التواصل الاجتماعي </th> --}}
                        <th>العمليات </th>
                   
                      </tr>
                    </thead>
                    <tbody class="list ">
                      @foreach ($stores as $store)
                      <tr>
                        <th > {{$store->store_owner}}</th>
                        <th > {{$store->store_name}}</th>
                        <th > {{$store->email}}</th>
                        <th > {{$store->phone}}</th>
                        {{-- <th > {{$store->bank_IBAN}}</th> --}}
                        <th > {{$store->username}}</th>
                        {{-- <th > {{$store->social_media_accounts}}</th> --}}
                        <td>

                          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                              data-target="#exampleModaldelete{{ $store->id }}" title=" حذف"><i
                                  class="fa fa-close"></i> حذف</button>

                          @if ($store->status == 0)
                              <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                  data-target="#exampleModalconvert{{ $store->id }}" title=" مشاهدة "> مشاهدة </button>
                          @endif

                      </td>

                      <div class="modal fade" id="exampleModaldelete{{ $store->id }}" tabindex="-1"
                          role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                  <div class="modal-body">
                                      <form action="{{ route('admin.stores.destroy', $store->id) }}"
                                          method="post">
                                          @method('delete')
                                          @csrf
                                          <h5 class="modal-title" style="display: flex;"
                                              id="exampleModalLabel"> حذف </h5>


                                          <div class="modal-body" style="display: flex;">
                                              هل انت متاكد من عملية الحذف ؟
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary"
                                                  data-dismiss="modal">اغلاق</button>
                                              <button type="submit" class="btn btn-danger">تأكيد</button>
                                          </div>
                                      </form>
                                  </div>
                              </div>

                          </div>
                      </div>
                      <div class="modal fade" id="exampleModalconvert{{ $store->id }}"
                          tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">

                                  <div class="modal-body">
                                      <form action=""
                                          method="post">
                                          @method('put')

                                          @csrf
                                          <h5 class="modal-title" style="display: flex;"
                                              id="exampleModalLabel"> بيانات صاحب المتجر </h5>

                                         


                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary"
                                                  data-dismiss="modal">اغلاق</button>
                                              <button type="submit" class="btn btn-danger">تأكيد</button>
                                          </div>
                                      </form>
                                  </div>

                              </div>
                          </div>
                      </div>
                      </tr>
                      @endforeach
                     
                    </tbody>
                  </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                  <div class="row">
                    <div class="col-md-5 col-sm-5">

                    </div>
                    <div class="col-md-7 col-sm-7">
                        <div class="dataTables_paginate paging_bootstrap_full_number" id="sample_1_paginate">
                            {{ $stores->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  


@endsection()