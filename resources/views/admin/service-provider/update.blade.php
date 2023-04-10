@extends('admin.master')
@section('child')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Service Provider Create</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dash') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.sp.list') }}">Service Provider</a></li>
                            <li class="breadcrumb-item active">Update</li>
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
                            <i class="fa fa-users" aria-hidden="true"></i> Service Provider Update
                        </h3>
                    </div>
                    <!-- form start -->
                    <div class=" col-md-12">
                        <div class="card-body">

                            <form role="form" action="javascript:void(0)" method="post"
                                enctype="multipart/form-data" id="service_update">
                       
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Shop/Company Name</label>
                                            <input type="text" class="form-control" name="company_name"
                                                required="required" placeholder="Shop/Company Name" value="{{ $data->company_name }}">

                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Deals In</label>
                                            <select class="form-control" name="deal_in" required>
                                                <option value=""> --Select Deals In-- </option>
                                                @foreach (Helper::DEALS_IN_TYPE as $key => $value)
                                                    <option value="{{ $value }}" @if( $data->deal_in == $value ) selected @endif>{{ $key }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Address 1</label>
                                            <input type="text" class="form-control" placeholder="Address 1" name="address_1"
                                                required="required" value="{{ $data->address_1 }}">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Address 2</label>
                                            <input type="text" class="form-control" placeholder="Address 2" name="address_2" value="{{ $data->address_2 }}"
                                              >
                                        </div>


                                        <div class="form-group col-md-4">
                                            <label>City Name</label>
                                            <input type="text" class="form-control" placeholder="City Name" name="city_name"
                                                required="required" value="{{ $data->city_name }}">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>State</label>
                                            <select class="form-control" name="state_id" required>
                                                <option value=""> --Select State-- </option>
                                                @foreach ($state as $key => $value)
                                                    <option value="{{ $value->id }}" @if( $data->state_id == $value->id ) selected @endif>{{ $value->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Zip Code</label>
                                            <input type="number" class="form-control" placeholder="Address" name="zip_code"
                                                required="required" value="{{ $data->zip_code }}">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Service Coverage</label>
                                            <select class="form-control" name="coverage" required>
                                                <option value=""> --Select Service Coverage-- </option>
                                                @foreach (Helper::SERVICE_COVERAGE as $key => $value)
                                                    <option value="{{ $value }}" @if( $data->coverage == $value ) selected @endif>{{ $key }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Service Category</label>
                                            <select class="form-control" name="category_id" required>
                                                <option value=""> --Select Service Category-- </option>
                                                @foreach ($category as $key => $value)
                                                    <option value="{{ $value->id }}" @if( $data->category_id == $value->id ) selected @endif>{{ $value->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Service Provider Type</label>
                                            <select class="form-control" name="service_provider_type" required>
                                                <option value=""> --Select Service Provider Type-- </option>
                                                @foreach (Helper::SERVICE_PROVIDER_TYPE  as $key => $value)
                                                <option value="{{ $key }}" @if( $data->service_provider_type == $key ) selected @endif>{{ $value }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group col-md-4">
                                            <label>Contact Number </label>
                                            <input type="text" class="form-control" placeholder="Contact Number " name="contact_number"
                                                required="required" value="{{ $data->contact_number }}">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Contact Name</label>
                                            <input type="text" class="form-control" placeholder="Contact Name" name="contact_name"
                                                required="required"  value="{{ $data->contact_name }}">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Alternate contact number</label>
                                            <input type="text" class="form-control" placeholder="Alternate contact number" name="alternate_contact_number"
                                                required="required"  value="{{ $data->alternate_contact_number }}">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Official email id</label>
                                            <input type="email" class="form-control" placeholder="Official email id" name="official_email_id"
                                                required="required"  value="{{ $data->official_email_id }}">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Costing Behaviour</label>
                                            <select class="form-control" name="costing_behaviour" required>
                                                <option value=""> --Select Costing Behaviour Type-- </option>
                                                @foreach (Helper::COSTING_BEHAVIOUR  as $key => $value)
                                                <option value="{{ $key }}" @if( $data->costing_behaviour == $key ) selected @endif>{{ $value }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Shop Type</label>
                                            <select class="form-control" name="shop_type" required>
                                                <option value=""> --Select Shop Type-- </option>
                                                @foreach (Helper::SHOP_TYPE  as $key => $value)
                                                <option value="{{ $key }}" @if( $data->shop_type == $key ) selected @endif>{{ $value }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>



                                        <div class="form-group col-md-12">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                option>
                                                @foreach (Helper::STATUS  as $key => $value)
                                                <option value="{{ $key }}" @if( $data->status == $key ) selected @endif>{{ $value }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <input type="hidden" name="id" value="{{ $data->id }}">
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-info"><i class="fa fa-pencil"></i>
                                                Update</button>
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

    {{-- <div class="modal fade agreement_model my_model" role="dialog" id="image_previewer">
      <div class="modal-dialog model-lg">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close btn-danger btn" data-dismiss="modal"
                  onclick="modelClosePreview_('#image_previewer')">&times;</button>
            </div>
            <div class="modal-body">
               <iframe src="" id="image_previewer_iframe" style="width:100%;height:450px;"></iframe>
            </div>
         </div>
      </div>
   </div> --}}

    @push('script')
    <script src="{{ asset('AdminAssets/js/service.js') }}"></script>
    @endpush
@endsection
