@extends('admin.master')
@section('child')
@push('style')
  <link rel="stylesheet" href="{{ url('AdminAssets/plugins/datatables/dataTables.bootstrap4.css') }}">
@endpush

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dash') }}">Home</a></li>
                            <li class="breadcrumb-item active">Service Provider</li>
                        </ol>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header d-flex p-0">
                            <h3 class="card-title p-3 titleClass">
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i>Create
                            </h3>
                            <div class="create_col">
                              <a href="{{ route('admin.sp.create') }}" class="btn btn-info" role="button"><i
                                      class="nav-icon fa fa-edit"></i> Create </a>

                                     
                          </div>
                        </div>


                        <div class="col-md-12">

                            <!-- /.card-header -->
                            <div class="card-body table-responsive">

                                <table id="my_table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Shop/Company Name</th>
                                            <th>Deals In</th>
                                            <th>Address </th>
                                            <th>Service Coverage</th>
                                            <th>Service Category</th>
                                            <th>Service Provider Type</th>
                                            <th>Contact Number </th>
                                            <th>Contact Name</th>
                                            <th>Alternate contact number</th>
                                            <th>Official email id</th>
                                            <th>Costing Behaviour </th>
                                            <th>Shop Type</th>
                                            <th>Status</th>
                                            <th>Last Modification</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    
                                    </tbody>

                                </table>



                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->







                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
        </section>
        <!-- right col -->
     </div>

   

    @push('script')

  <!-- DataTables -->
  <script src="{{ url('AdminAssets/plugins/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ url('AdminAssets/plugins/datatables/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('AdminAssets/js/service.js') }}"></script>
     <script>
        service_provider_list("{{ url()->current() }}");
     </script>
    @endpush
@endsection
