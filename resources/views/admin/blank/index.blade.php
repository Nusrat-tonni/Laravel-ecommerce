
@extends('admin.layouts.admin')

@section('content')

            <!--start page wrapper -->
            <div class="page-wrapper">
                <div class="container-fluid">
                @include('admin.includes.bread_crumb',['title'=>'All'])
                <div class="row">
                    <div class="col-lg-12">
<div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Responsive Table</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
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