@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.bread_crumb', ['title' => 'All'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-body">
                        <h5 class="card-title">Responsive Table</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Products</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <th scope="row">1</th>
                                        <th scope="row">1</th>
                                        <th scope="row">1</th>
                                        <td>Cell</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
