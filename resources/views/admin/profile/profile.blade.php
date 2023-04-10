@extends('admin.master')
@section('child')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dash') }}">Home</a></li>

                        <li class="breadcrumb-item active">Profile Update</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            {{-- <div class="row"> --}}



                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">

                        <div class="card-header d-flex p-0">
                            <h3 class="card-title p-3 titleClass">
                                <i class="fa fa-user" aria-hidden="true"></i> Profile
                            </h3>
                        </div>


                        <form role="form" action="{{ route('admin.profile.store') }} " method="post"
                            enctype="multipart/form-data">

                            @if (session('status'))
                            <div class="alert alert-{{ session('status') }} alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                {{ session('Message') }}
                            </div>
                            @endif
                            @csrf
                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-md-12 row">
                                        <div class="col">
                                            <label for="exampleInputEmail1">Profile Photo</label>
                                            <input type="file" class="form-control" name="image2">
                                        </div>
                                        <div class="col p35">
                                            <span class="upload_view">
                                                <a href="javascript:void(0)"
                                                    onclick="preview_by_link_('{{ asset('storage/profile/'.$output->image) }}')"><img
                                                        src="{{ asset('AdminAssets/images/last_view.png') }}"
                                                        alt="Last Upload View"></a>
                                            </span>

                                            <input type="hidden" class="form-control" name="image_old"
                                                value="{{ @$output->image }}">
                                        </div>
                                        {{-- <p class="imgx1">Size : 80 * 80 PIXEL</p> --}}

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $output->name }}"
                                            required="required">
                                        <span style="color: red;">{{ $errors->first('name') }}</span>
                                    </div>



                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ $output->email }}" required="required">
                                        <span style="color: red;">{{ $errors->first('email') }}</span>
                                    </div>



                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input type="text" class="form-control" name="mobile"
                                            value="{{ $output->mobile }}" required="required">
                                        <span style="color: red;">{{ $errors->first('mobile') }}</span>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Sort Info</label>
                                        <input type="text" class="form-control" name="sort_info"
                                            value="{{ $output->sort_info }}" required="required">
                                        <span style="color: red;">{{ $errors->first('sort_info') }}</span>
                                    </div>


                                  

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Facebook</label>
                                        <input type="text" class="form-control" name="fb" value="{{ $output->fb }}">
                                        <span style="color: red;">{{ $errors->first('fb') }}</span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Youtube Link</label>
                                        <input type="text" class="form-control" name="youtube"
                                            value="{{ $output->youtube }}">
                                        <span style="color: red;">{{ $errors->first('youtube') }}</span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Instagram</label>
                                        <input type="text" class="form-control" name="insta"
                                            value="{{ $output->insta }}">
                                        <span style="color: red;">{{ $errors->first('insta') }}</span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">LinkedIn</label>
                                        <input type="text" class="form-control" name="linkedin"
                                            value="{{ $output->linkedin }}">
                                        <span style="color: red;">{{ $errors->first('linkedin') }}</span>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-info"><i class="fa fa-pencil">
                                            </i> Update</button>
                                    </div>


                                </div>
                        </form>


                        <!-- /.card -->





                    </div>


                </div><!-- /.container-fluid -->
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

@push('style')
<link rel="stylesheet" href="{{ url('AdminAssets/plugins/summernote/summernote-bs4.css') }}">
@endpush
@push('script')
<script src="{{ url('AdminAssets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('AdminAssets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script type="text/javascript">
    $('.textarea').summernote();
</script>
@endpush
@endsection