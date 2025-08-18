

@extends('admin.layouts.admin')

@section('content')
<style>
    .card .table .card .table th {
        white-space: break-spaces;
        padding-left: 1.5rem;
    }
</style>

            <!--start page wrapper -->
            <div class="page-wrapper">
                <div class="container-fluid">
                @include('admin.includes.bread_crumb',['title'=>'View'])
              <div class="row">
                <div class="col-lg-12">
                     <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <td style="width: 40%">title</td>
                                    <td>:</td>
                                    <td>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci dignissimos, pariatur cum rem laborum nesciunt itaque labore excepturi accusantium?
                                         Odio perspiciatis quos fugiat eos, reprehenderit atque aut voluptas eum ipsum.
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">title</td>
                                    <td>:</td>
                                    <td>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci dignissimos, pariatur cum rem laborum nesciunt itaque labore excepturi accusantium?
                                         Odio perspiciatis quos fugiat eos, reprehenderit atque aut voluptas eum ipsum.
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">title</td>
                                    <td>:</td>
                                    <td>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci dignissimos, pariatur cum rem laborum nesciunt itaque labore excepturi accusantium?
                                         Odio perspiciatis quos fugiat eos, reprehenderit atque aut voluptas eum ipsum.
                                    </td>
                                </tr>
                            </table>
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