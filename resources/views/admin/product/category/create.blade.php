@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.bread_crumb', ['title' => 'Create Category'])
            <div class="row">
                <div class="col-lg-12">

                    <div class="card-body">
                        <div class="card-title">Create Category</div>
                        <hr />
                        <form method="POST" class="insert_form" action="{{route('category.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="preloader"></div>
                              <div class="form-group row">
                                <label for="input-21" class="col-sm-2 col-form-label">Select Main category</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" name="name" class="form-control" id="input-21" /> --}}
                                    <select name="main_category_id" class="form-control" id="">
                                        <option value="">Select</option>
                                        @foreach ($main_category  as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option> 
                                        @endforeach
                                    </select>
                                    <span class="text-danger main_category_id"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input-21" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="input-21" />
                                    <span class="text-danger name"></span>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="input-21" class="col-sm-2 col-form-label">Icon</label>
                                <div class="col-sm-10">
                                    <input type="file" name="icon" class="form-control" id="input-21"
                                        placeholder="Enter Your Name" />
                                        <span class="text-danger icon"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="input-21" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i>ADD</button>
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
