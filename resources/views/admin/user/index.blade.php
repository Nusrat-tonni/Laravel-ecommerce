
@extends('admin.layouts.admin')

@section('content')

            <!--start page wrapper -->
            <div class="page-wrapper">
                <div class="container-fluid">
                @include('admin.includes.bread_crumb',['title'=>'User Management'])
                <div class="row">
                    <div class="col-lg-12">
                       <div class="card">
                        <div class="card-header d-flex justify-content-between">
                          <h5 class="card-title">All User</h5>
                            <a href="{{ route('admin_user_create') }}" class="btn btn-light waves-effect waves-light m-1">
                                                            <i class="fa fa-plus"></i><span>Add New</span>
                                                    </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">first name</th>
                                            <th scope="col">last name</th>
                                            <th scope="col">username</th>
                                            <th scope="col">email</th>
                                            <th scope="col">role name</th>
                                            <th scope="col">created at</th>
                                            <th scope="col">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($collection as $item)
    <tr>
                                            <th scope="row">1</th>
                                            <td>{{$item->first_name}}</td>
                                            <td>{{$item->last_name}}</td>
                                            <td>{{$item->username}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->role_id}}</td>
                                            <td>{{$item->created_at->format('d M Y h:i:s a')}}</td>
                                            <td>
                                                <div>
                                                     <a type="button" href="{{ route('admin_user_view',$item->id) }}" class="btn btn-light waves-effect waves-light m-1">
                                                            <i class="fa fa-eye"></i><span>view</span>
                                                    </a>
                                                     <a type="button" href="{{ route('admin_user_view',$item->id) }}" class="btn btn-warning waves-effect waves-light m-1">
                                                            <i class="fa fa-pencil"></i> <span>edit</span>
                                                    </a>
                                                     <a type="button" href="{{ route('admin_user_view',$item->id) }}" class="btn btn-danger waves-effect waves-light m-1">
                                                            <i class="fa fa-trash-o"></i> <span>delete</span>
                                                    </a>
                                                </div>

                                            </td>
                                            
                                        </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                            </div>
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