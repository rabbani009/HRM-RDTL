@extends('backend')

@section('page_level_css_plugins')
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <link href="{{ asset('AdminLTE-3.2.0/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
@endsection

@section('page_level_css_files')

@endsection

@section('content')

<section class="content">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">{{ $commons['content_title'] }}</h1>

            <div class="card-tools">
                Note:: [ Here you will find all employees ]
            </div>
        </div>
        <!-- /.card-header -->

 
        <div class="card card-solid">  
            <div class="card-body pb-0"> 
              <div class="row">
     @foreach($employee as $row)
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                  <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">
                      {{ $row->designation ? $row->designation : 'Not Given'}}
                    </div>
                    <div class="card-body pt-0">
                      <div class="row">
                        <div class="col-7">
                          <h2 class="lead"><b>{{ $row->employee_name }}</b></h2>
                          <p class="text-muted text-sm"><b>Employee ID: </b>{{ $row->employee_id ? $row->employee_id : 'Not Given'}} </p>
                          <ul class="ml-4 mb-0 fa-ul text-muted">
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Email:{{$row->email}}</li>
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: {{ $row->contact_number ? $row->contact_number : 'Not Given' }}</li>
                          </ul>
                        </div>
                        <div class="col-5 text-center">
                          <img src="{{ asset('upload/profile_images/male.png') }}" alt="user-avatar" class="img-circle img-fluid">
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="text-right">
                        {{-- <a href="#" class="btn btn-sm bg-teal">
                          <i class="fas fa-comments"></i>
                        </a> --}}
                        <a href="#" class="btn btn-sm btn-primary">
                          <i class="fas fa-user"></i> View Profile
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              
     @endforeach  
                     
              </div>
               
            </div>
            <!-- /.card-body -->
   
            <!-- /.card-footer -->
          </div>





        <!-- /.card-body -->

        <div class="card-footer">
            {{ $employee->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>
</section>

@endsection

<!-- BEGIN PAGE LEVEL PLUGINS -->
@section('page_level_js_plugins')
    <script src="{{ asset('AdminLTE-3.2.0/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
@endsection
<!-- END PAGE LEVEL PLUGINS -->