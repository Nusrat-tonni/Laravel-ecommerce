
@extends('admin.layouts.admin')

@section('content')

            <!--start page wrapper -->
            <div class="page-wrapper">
                <div class="container-fluid">
                @include('admin.includes.bread_crumb',['title'=>'User Management'])
              <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Created User</div>
                            <hr />
                             {{-- @php
                                dd(Session::all());
                            @endphp  --}}
                            <form method="POST" action="{{ route('admin_user_store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label"> First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="first_name" class="form-control" id="input-21" placeholder="first name" />
                                        @error('first_name')
                                        <div class="text-warning">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label"> Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="last_name" class="form-control" id="input-21" placeholder="last name" />
                                        @error('last_name')
                                        <div class="text-warning">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label"> User Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="username" class="form-control" id="input-21" placeholder="user name" />
                                        @error('username')
                                        <div class="text-warning">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" id="input-21" placeholder="Enter Your Email Address" />
                                        @error('email')
                                        <div class="text-warning">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">mobile Number</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="phone" class="form-control" id="input-21" placeholder="phone" />
                                        @error('phone')
                                        <div class="text-warning">{{$message}}</div>
                                        @enderror

                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="password" class="form-control" id="input-21" placeholder="Enter Password" />
                                        @error('password')
                                        <div class="text-warning">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="password_confirmation" class="form-control" id="input-21" placeholder="Confirm Password" />
                                        @error('password_confirmation')
                                        <div class="text-warning">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                               <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" class="form-control" id="input-21" placeholder="image" />
                                        @error('image')
                                        <div class="text-warning">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
                
               
  
        
  <!--end page wrapper -->
            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->
 </div>
  </div>
@endsection