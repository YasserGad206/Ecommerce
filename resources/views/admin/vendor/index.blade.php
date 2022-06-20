@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">المتاجر </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">المتاجر</a>
                                </li>
                                <li class="breadcrumb-item active"> المتاجر
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                @if(Session::has('scuess'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('scuess')}}
                              </div>
                            @endif

                            @if(Session::has('error'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('error')}}
                              </div>
                            @endif
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">المتاجر </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                              

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered ">
                                            <thead>
                                            <tr>
                                                <th> الاسم</th>
                                                <th> الموبيل</th>
                                                <th>العنوان</th>
                                                <th>الايميل</th>
                                                <th>لوجو</th>
                                                <th>القائمة الرئيسية</th>
                                                <th>الحالة</th>
                                                <th>الإجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($vendor)
                                                @foreach($vendor as $vendor)
                                                    <tr>
                                                        <td>{{$vendor ->  name}}</td>
                                                        <td>{{$vendor -> mobile}}</td>
                                                        <td>{{$vendor -> address}}</td>
                                                        <td>{{$vendor -> email}}</td>
                                                        <td>  <img  style="width:50px; height:50px;"src= '{{$vendor -> logo}}' /></td>
                                                        @isset($vendor -> MainCat)
                                                        <td>{{$vendor -> MainCat ->name}}</td>
                                                        @endisset
                                                        <td>
                                                            
                                                            @if($vendor -> active == '1')
                                                            {{ 'مفعل' ;}}
                                                        @else
                                                        {{ 'لم يتم التفعيل' ;}}
                                                        @endif
                                                       
                                                        </td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('admin.vendor.edit',$vendor -> id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>


                                                                <a href="{{route('admin.vendor.delete',$vendor -> id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>


                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection