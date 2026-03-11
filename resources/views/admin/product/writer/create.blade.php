@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.bread_crumb', ['title' => 'Create Main_Category'])
            <div class="row">
                <div class="col-lg-12">

                    <div class="card-body">
                        <div class="card-title">Create Writer</div>
                        <hr />
                        <form method="POST" class="insert_form" action="{{route('writer.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="preloader"></div>
                            <div class="form-group row">
                                <label for="input-21" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="input-21" />
                                    <span class="text-danger name"></span>
                                </div>
                            </div>

                             <div class="form-group row">
                                <label for="input-21" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control" id="mytextarea1" cols="30" rows="10"></textarea>
                                    {{-- <input type="text" name="description" class="form-control" id="input-21" /> --}}
                                    <span class="text-danger description"></span>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="input-21" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control" id="input-21"
                                        placeholder="Enter Your image" />
                                        <span class="text-danger image"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
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

     @push('ccss')
  
        <link rel="stylesheet" href="{{ asset('contents/admin') }}/plugins/summernote/dist/summernote-bs4.css" />
    @endpush

    @push('cjs')
      
        <script src="{{ asset('contents/admin') }}/plugins/summernote/dist/summernote-bs4.min.js"></script>
         {{-- <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>  --}}

        <script>
            // $('.multiple-select').select2({
            //     // theme: 'bootstrap4',
            //     // width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            //     placeholder: $(this).data('placeholder'),
            //     allowClear: Boolean($(this).data('allow-clear')),
            // });
            //  tinymce.init({
            //      selector: '#mytextarea1'
            //  });
            //  tinymce.init({
            //      selector: '#mytextarea2'
            // });
            $('#mytextarea1').summernote({
                height: 400,
                tabsize: 2
            });

          

            $('#selectmain_category_id').on('change', function() {
                let value = $(this).val();
                $.get("/admin/product/get-all-cateogory-selected-by-main-category/" + value, (res) => {
                    $('#selectcategory_id').html(res);
                })
            })
        </script>
    @endpush
@endsection
