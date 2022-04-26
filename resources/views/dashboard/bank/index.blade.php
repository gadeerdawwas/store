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
                                <li class="breadcrumb-item active" aria-current="page">جدول البنوك </li>
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
                                <h3 class="mb-0" style="    float: right;">جدول البنوك</h3>

                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                data-target="#exampleModal" title=" اضافة"><i
                                    class="fa fa-close"></i> اضافة</button>

                            </div>
                           
                          
                           
                           
                            <!-- Light table -->
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush text-center">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="padding: 0">الإسم البنك</th>
                                            
                                            <th>العمليات </th>

                                        </tr>
                                    </thead>
                                    <tbody class="list ">
                                        @foreach ($banks as $bank)
                                            <tr>
                                                <th> {{ $bank->name }}</th>
                                     
                                                <td>

                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                        data-target="#exampleModaldelete{{ $bank->id }}" title=" حذف"><i
                                                            class="fa fa-close"></i> حذف</button>

                                               
                                                        <button type="button" class="btn btn-info btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#exampleModalconvert{{ $bank->id }}"
                                                            title=" تعديل "> تعديل </button>
                                                 

                                                </td>

                                                <div class="modal fade" id="exampleModaldelete{{ $bank->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ route('admin.banks.destroy', $bank->id) }}"
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
                                                                        <button type="submit"
                                                                            class="btn btn-danger">تأكيد</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal fade" id="exampleModalconvert{{ $bank->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">

                                                            <div class="modal-body">
                                                                <form action="" method="post">
                                                                    @method('put')

                                                                    @csrf
                                                                    <h5 class="modal-title" style="display: flex;"
                                                                        id="exampleModalLabel"> تعديل اسم البنك </h5>

                                                                    <br>


                                                                    

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">اغلاق</button>
                                                                        <button type="submit"
                                                                            class="btn btn-danger">تأكيد</button>
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
                                        <div class="dataTables_paginate paging_bootstrap_full_number"
                                            id="sample_1_paginate">
                                            {{ $banks->links('pagination::bootstrap-4') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModal"
                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form
                                    action="{{route('admin.banks.index')}}"
                                    method="post">
                                    @csrf
                                    <h5 class="modal-title" style="display: flex;"
                                        id="exampleModalLabel"> أضافة بنك </h5>

                                        <div class="modal-body">					
                                            <div class="form-group">
                                                <h3><label  style="display: flex;" >اسم البنك</label></h3>
                                                <input type="text" required name='name' class="form-control" required>
                                            </div>
                                                          
                                        </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">اغلاق</button>
                                        <button type="submit"
                                            class="btn btn-danger">حفظ</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
