@extends('admin.master')
@section('child')
    @push('style')
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    @endpush

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dash') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('admin/user') }}">User</a></li>
                            <li class="breadcrumb-item active">Update</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header d-flex p-0">
                            <h3 class="card-title p-3 titleClass">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i> User Update
                            </h3>
                        </div>
                        <!-- form start -->
                        <div class=" col-md-12">
                            <div class="card-body">
                                <form role="form" method="post" id="admin_user_form">

                                    <div class="row">
                                        <input type="hidden" name="id" value="{{ $data->id }}" required>
                                        <div class="form-group col-md-4">
                                            <label>Name <span class="requied_sapn">*</span></label>
                                            <input type="text" class="form-control"
                                                name="name"value="{{ $data->name }}" required="required">

                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Mobile <span class="requied_sapn">*</span></label>
                                            <input type="text" class="form-control"
                                                name="mobile"value="{{ $data->mobile }}" required="required">

                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>DOB <span class="requied_sapn">*</span></label>
                                            <input type="text" id="datepicker" class="form-control"
                                                name="dob"value="{{ $data->dob }}" required="required">
                                        </div>


                                        <div class="form-group col-md-6">
                                            <label>Gender <span class="requied_sapn">*</span></label> <br>

                                            @foreach (Helper::GENDER as $key => $value)
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="lebel_id_{{ $key }}">
                                                        <input type="radio" class="form-check-input" id="lebel_id_{{ $key }}"
                                                            name="gender" value="{{ $key }}"
                                                            @if ($data->gender == $key) checked @endif>{{ $value }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Insurence Number <span class="requied_sapn">*</span></label>
                                            <input type="text" class="form-control"
                                                name="mobile"value="{{ $data->insurence_number }}" required="required">

                                        </div>

                                        <div class="form-group col-md-12 row">
                                            <br>
                                            <div class="col ">
                                                <label for="exampleInputEmail1" style="width: 100%;"> Profile</label>
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                            <div class="col p35">
                                                <span class="upload_view">
                                                    <a href="javascript:void(0)"
                                                        onclick="preview_by_link_('{{ asset('storage/profile/' . $data->profile) }}')"><img
                                                            src="{{ asset('AdminAssets/images/last_view.png') }}"
                                                            alt="Last Upload View"></a>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Status</label>
                                            <select class="form-control" name="status">


                                                @foreach (Helper::USER_BLOCK_TYPE as $key => $value)
                                                    <option value="{{ $value }}"
                                                        @if ($value == $data->status) selected="selected" @endif>
                                                        {{ $value }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-info"><i class="fa fa-pencil">
                                                </i> Update </button>
                                                <img src="{{ asset('web/loader/admin_loader.svg') }}" class="admin_loader"
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


    <div class="modal fade agreement_model my_model" role="dialog" id="image_previewer">
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
    </div>

    @push('script')
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js"></script>
    <script src="{{ asset('AdminAssets/js/dashboard.js') }}"></script>
        <script>
            $(function() {
                $("#datepicker").datepicker({
                    changeMonth: true,
                    changeYear: true,
                    maxDate: '-20Y',
                    dateFormat: 'yy-mm-dd'
                });
            });
        </script>
    @endpush
@endsection
