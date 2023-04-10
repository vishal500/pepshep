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
                            <li class="breadcrumb-item active">Users</li>
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

                        <div class="col-md-12">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive">

                                <table id="my_table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>DOB</th>
                                            <th>Gender</th>
                                            <th>Insurence Number</th>
                                            <th>Profile</th>
                                            <th>Status</th>
                                            <th>Last Login</th>
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

        <script>
            $(document).ready(function() {
                $("#my_table").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ url()->current() }}",

                    columns: [{
                            "data": 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        }, {
                            data: 'name',
                            name: 'name',
                            searchable: true
                        }, {
                            data: 'mobile',
                            name: 'mobile',
                            searchable: true
                        }, {
                            data: 'dob',
                            name: 'dob',
                            searchable: true
                        }, {
                            data: 'gender',
                            name: 'gender',
                            searchable: true
                        }, {
                            data: 'insurence_number',
                            name: 'insurence_number',
                            searchable: true
                        }, {

                            "mRender": function(data, type, row) {
                                return `<img src="${row.profile}" alt="" width="50px" height="50px">`;
                            },
                            searchable: false
                        }, {
                            data: 'status',
                            name: 'status',
                            searchable: true
                        }, {
                            data: 'updated_at',
                            name: 'updated_at',
                            searchable: true
                        }, {
                            "mRender": function(data, type, row) {
                                return `<a href="${row.route_show}" class="btn btn-primary  btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>`;
                            },
                            searchable: false
                        }


                    ],

                });
            });
        </script>
    @endpush
@endsection
