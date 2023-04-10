@extends('admin.master')
@section('child')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0 text-dark">Dashboard</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dash') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('admin/meta') }}">Meta</a></li>

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
          <div class="row">



        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
             
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3 titleClass">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i> Meta Update
                </h3>
               
                </div>

                  <div class=" col-md-12">

            @if (session('status'))
           <div class="alert alert-{{ session('status') }} alert-dismissible" >
                <button type="button" class="close" data-dismiss="alert">&times;</button>

            {{ session('Message') }}
              </div>
            @endif
             </div>

              <form role="form" action="{{ url('admin/meta',$id) }}" method="post"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                                  <div class="row">

               <h4><a href="https://www.seoptimer.com/meta-tag-generator" target="_blank"> Generate meta Tags</a></h4>


                <div class="form-group col-md-12">
                    <label for="email">Page Url:</label>
                         <textarea placeholder="Ex : about"    style="width: 100%; height: 100; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="url">{{ $output[0]->url }}</textarea>
                          <span style="color: red;">{{ $errors->first('url') }}</span>

                  </div>

                  <div class="form-group col-md-12">
                    <label for="email">In Header:</label>
                         <textarea placeholder="Place some Meta in Header section"    style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="in_header">{{ $output[0]->in_header }}</textarea>
                          <span style="color: red;">{{ $errors->first('in_header') }}</span>

                  </div>


                  <div class="form-group col-md-12">
                    <label for="email">In Footer:</label>
                         <textarea placeholder="Place some Meta in footer section" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="in_footer">{{ $output[0]->in_footer }}</textarea>
                                                                 <span style="color: red;">{{ $errors->first('in_footer') }}</span>

                  </div>




               
                  <div class="form-group col-md-12">
                     <button type="submit" class="btn btn-danger"><i class="fa fa-pencil">
                              </i> Update Meta</button>
                  </div>


                </div>
              </form>
            </div>
            <!-- /.card -->


        


          </div>







    </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  @push('script')
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
  @endpush
@endsection
