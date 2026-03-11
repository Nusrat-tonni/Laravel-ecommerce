@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.bread_crumb', ['title' => 'Edit'])
            <div class="row">
                <div class="col-lg-12">

                    <div class="card-body">
                        <div class="card-title">Edit Brand</div>
                        <hr />
                        <form method="POST"  action="{{ route('brand.update',$brand->id) }}" class="update_form" enctype="multipart/form-data">
                            <div class="preloader"></div>
                            @csrf
                            @method('PUT')
                           
                            <div class="form-group row">
                                <label for="input-21" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{ $brand->name }}" class="form-control" id="input-21" />
                                     <span class="text-danger name"></span>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="input-21" class="col-sm-2 col-form-label">Icon</label>
                                <div class="col-sm-10">
                                <input type="file" name="icon" class="form-control" id="input-21" />
                               <img src="/{{ $brand->logo }}" style="height: 40px;" alt="">
                                <span class="text-danger icon"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i>UPDATE</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->
@endsection
