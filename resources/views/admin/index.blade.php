@extends('admin.layouts.admin')
@section('content')

            <div class="content-wrapper">
                <div class="container-fluid">
                    @include('admin.includes.bread_crumb',['title'=>'DASHBOARD'])
                    <div class="row">
                        <div class="col-lg-12">
                            <div style="height: 600px;">
                                {{-- <!--Please remove the height before using this page-->
                                <form action="/test" class="row" method="POST" enctype="multipart/form-data">
                                    @csrf
                                     <div class="form-group col-md-6 col-xl-6">
                                    <input name="fm_file" type="file">
                                    <button>submit</button>
                                    </div>
                                </form> --}}
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