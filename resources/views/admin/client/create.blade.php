@extends('admin.master')
@section('child')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Client Create</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dash') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.client.list') }}">Client</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- general form elements -->
                <div class="card">
                    <div class="card-header d-flex p-0">
                        <h3 class="card-title p-3 titleClass">
                            <i class="fa fa-users" aria-hidden="true"></i> Client Create
                        </h3>
                    </div>
                    <!-- form start -->
                    <div class=" col-md-12">
                        <div class="card-body">

                            <form role="form" action="javascript:void(0)" method="post"
                                enctype="multipart/form-data" id="client_create">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Shop/Company Name</label>
                                            <input type="text" class="form-control" name="company_name"
                                                value="{{ old('company_name') }}" required="required" placeholder="Shop/Company Name">

                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Select Type</label>
                                            <select class="form-control" name="type" required>
                                                <option value=""> --Select Type-- </option>
                                                @foreach (Helper::DEALS_IN_TYPE as $key => $value)
                                                    <option value="{{ $value }}">{{ $key }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Address 1</label>
                                            <input type="text" class="form-control" placeholder="Address 1" name="address_1"
                                                required="required">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Address 2</label>
                                            <input type="text" class="form-control" placeholder="Address 2" name="address_2"
                                              >
                                        </div>


                                        <div class="form-group col-md-4">
                                            <label>City Name</label>
                                            <input type="text" class="form-control" placeholder="City Name" name="city_name"
                                                required="required">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>State</label>
                                            <select class="form-control" name="state_id" required>
                                                <option value=""> --Select State-- </option>
                                                @foreach ($state as $key => $value)
                                                    <option value="{{ $value->id }}">{{ $value->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Zip Code</label>
                                            <input type="number" class="form-control" placeholder="Address" name="zip_code"
                                                required="required">
                                        </div>

                                      


                                        <div class="form-group col-md-4">
                                            <label>Contact Number </label>
                                            <input type="text" class="form-control" placeholder="Contact Number " name="contact_number"
                                                required="required">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Contact Name</label>
                                            <input type="text" class="form-control" placeholder="Contact Name" name="contact_name"
                                                required="required">
                                        </div>

                                     

                                        <div class="form-group col-md-4">
                                            <label>Billing email id</label>
                                            <input type="email" class="form-control" placeholder="Billing email id" name="billing_email_id"
                                                required="required">
                                        </div>

                                       


                                        <div class="form-group col-md-12">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                option>
                                                @foreach (Helper::STATUS  as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-info"><i class="fa fa-pencil"></i>
                                                Create</button>
                                                <img src="{{ asset('assets/loader/admin_loader.svg') }}" class="admin_loader"
                                                alt="loader" style="display: none" width="50px" />
                                        </div>


                                    </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>

                </div>


            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>



    @push('script')
        <script src="{{ asset('AdminAssets/js/client.js') }}"></script>
    @endpush
@endsection
