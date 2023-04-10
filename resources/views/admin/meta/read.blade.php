

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
              <li class="breadcrumb-item active">Meta </li>
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
                          <i class="fa fa-newspaper-o" aria-hidden="true"></i> Meta
                      </h3>
                      <div class="create_col">
                        <a href="{{ url()->current() . '/create' }}" class="btn btn-danger" role="button"><i
                                class="nav-icon fa fa-edit"></i> Create</a>
                    </div>
                  </div>

                  



                  <div class="col-md-12">

                      @if (session('status'))
                      <div class="alert alert-{{ session('status') }} alert-dismissible">
        
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ session('Message') }}
                      </div>
                      @endif

                      @if ($errors->any())
                          <div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div> 
                    @endif 

                      <!-- /.card-header -->
                      <div class="card-body table-responsive">

                        <table id="example2" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>#</th>
                     
                                              <th>Url</th>
          <th>In Header</th><th>In Footer</th>
                                <th>Date</th>
                                <th>Action</th>
          
                          </tr>
                          </thead>
                          <tbody>
          
                            @if(count($output) > 0)
                            @php $i = 0; @endphp
                            @foreach($output as $content1)
                                              @php $i = $i+1; @endphp
          
                          <tr>
                            <td>{{ $i}}</td>
                            <td>{!! $content1->url !!} </td>
          <td>{{ $content1->in_header }} </td><td>{{ $content1->in_footer }} </td>
                <td>Created Date : {!! $content1->created_at !!} <br> Last Modification Date :{!! $content1->updated_at !!}  </td>
                            <td>
          
          
                 {{-- @if($content1->url <> 'DEFAULT SEO')      --}}
            <a href="{{ url('admin/meta/'.$content1->id.'/edit') }}" class="btn btn-info tttt  btn-xs" role="button"><i class="nav-icon fa fa-edit"></i>Edit</a>
          
                             <form action="{{ url('admin/meta',$content1->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
                                            @csrf
                                                    <input type="hidden" name="sno" value="{{ $content1->id }}">
          
                                                  <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger tttt btn-xs"><i class="nav-icon fa fa-trash"></i> Delete</button>
                            </form>
                        {{-- @endif --}}
                            </td>
                          </tr>
                          @endforeach
                            @endif
          
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
           $(function() {
               // $("#example1").DataTable();
               $('#example2').DataTable({
                   "paging": true,
                   "lengthChange": true,
                   "searching": true,
                   "ordering": true,
                   "info": true,
                   "autoWidth": false,
               });
           });
       </script>
   @endpush
@endsection
