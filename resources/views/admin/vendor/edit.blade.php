

@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href=""> الاقسام الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item active"> تعديل - {{$vendor -> name}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> تعديل التجار </h4>
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
                            @if(Session::has('scuess'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('scuess')}}
                              </div>
                            @endif

                            
                           
                                <div class="card-content collapse show ">
                                    <div class="card-body">
                                        <form class="form" action="{{route('admin.vendor.update',$vendor -> id)}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                           
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات  التجار </h4>

                                                <div class="form-group">
                                                    <div class="text-center">
                                                      
                                                        <img
                                                            src="http://127.0.0.1:8000/{{$vendor -> logo}}"
                                                            class="rounded-circle  height-250" alt="صورة القسم  ">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label> لوجو </label>
                                                    <label id="projectinput7" class="file center-block">
                                                        <input type="file" id="file" name="logo">
                                                        <span class="file-custom"></span>
                                                    </label>
                                                    @error('logo')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                            
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الاسم </label>
                                                            <input type="text" value={{$vendor->name}} id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل اسم اللغة  "
                                                                   name="name">
                                                            @error('name')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  ">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الايميل </label>
                                                            <input type="text"  id="email"
                                                                   class="form-control"
                                                                   value={{$vendor->email}}
                                                                   placeholder="ادخل أختصار اللغة  "
                                                                   name="email">
                                                            @error('email')
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الياسورد </label>
                                                            <input type="text" value={{$vendor->password}} id="password"
                                                                   class="form-control"
                                                                   placeholder="ادخل اسم اللغة  "
                                                                   name="password">
                                                            @error('password')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  ">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الموبيل </label>
                                                            <input type="text"  id="mobile"
                                                                   class="form-control"
                                                                   value={{$vendor->mobile}}
                                                                   placeholder="  "
                                                                   name="mobile">
                                                            @error('mobile')
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> العنوان </label>
                                                            <input type="text" value={{$vendor->address}} id="address"
                                                                   class="form-control"
                                                                   placeholder="ادخل اسم اللغة  "
                                                                   name="address">
                                                            @error('address')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  ">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> القائمة الرئيسية </label>
                                                            <select name="main" class="select2 form-control">
                                                                <optgroup label="   من فضلك اختر  القائمة الرئيسية ">
                                                                    @foreach ($vendor1 as $vendore)
                                                                    <option value={{ $vendore ->id}} >  {{ $vendore ->name ;}}</option>
                                                                  @endforeach
                                                                </optgroup>
                                                            </select>


                                                            @error('main')
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>



                                            

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value={{ $vendor ->active}} name="active"
                                                                   id="switcheryColor4"
                                                                   class="switchery" data-color="success"
                                                                   checked/>
                                                            <label for="switcheryColor4"
                                                                   class="card-title ml-1"> الحالة </label>

                                                            @error('active')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1" onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                     


                    
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>




@endsection
