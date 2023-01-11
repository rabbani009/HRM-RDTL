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
        @if($errors->any())
            <div class="card pl-3 bg-danger">
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">{{ $commons['content_title'] }}</h1>

                <div class="card-tools">
                    Note:: * marked fields are required
                </div>
            </div>
            <form action="{{ route('employee.store') }}" method="post" data-bitwarden-watching="1" enctype="multipart/form-data" accept-charset="UTF-8">
                @csrf
                <div class="card-body">
                    <!-- Prerequisites section -->
                    <div class="container-fluid card ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group  @if ($errors->has('office')) has-error @endif">
                                    <label class="control-label">Office *</label>
                                    
                                    {{ Form::select('office', $offices, old('office')?old('office'):null, ['id="office", class="form-control select2"']) }}

                                    @if($errors->has('office'))
                                        <span class="error invalid-feedback"> {{ $errors->first('office') }} </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group  @if ($errors->has('department')) has-error @endif">
                                    <label class="control-label">department *</label>
                                    <div id="department_block">
                                        {{ Form::select('department', $departments, old('department')?old('department'):null, ['id="department", class="form-control select2"']) }}
                                    </div>
                                    @if($errors->has('department'))
                                        <span class="error invalid-feedback"> {{ $errors->first('department') }} </span>
                                    @endif
                                </div>
                            </div>
                           
                        </div>
                    </div>


                    <div class="container-fluid card ">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group @if ($errors->has('activity_title')) has-error @endif">
                                    <label for="">Employee Name *</label>
                                    <input type="text" name="employee_name" class="form-control @if($errors->has('employee_name')) is-invalid @endif" value="{{ old('employee_name') }}" placeholder="Enter Employee Name">
                                    @if($errors->has('employee_name'))
                                        <span class="error invalid-feedback">{{ $errors->first('employee_name') }}</span>
                                    @else
                                        <span class="help-block"> This field is required. </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group @if ($errors->has('employee_name')) has-error @endif">
                                    <label for="">Employee Id *</label>
                                    <input type="text" name="employee_id" class="form-control @if($errors->has('employee_id')) is-invalid @endif" value="{{ old('employee_id') }}" placeholder="Enter Employee Id">
                                    @if($errors->has('employee_id'))
                                        <span class="error invalid-feedback">{{ $errors->first('employee_id') }}</span>
                                    @else
                                        <span class="help-block"> This field is required. </span>
                                    @endif
                                </div>
                            </div>

                          
                            <div class="col-md-4">
                                <div class="form-group  @if ($errors->has('designation')) has-error @endif">
                                    <label class="control-label">Select Designation *</label>
                                    <select name="designation" class="form-control">
                                       
                                        <option value="Executive">Executive</option>
                                        <option value="Sr.Executive">Sr.Executive</option>	
                                        <option value="Asst.Manager">Asst.Manager</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Web Developer">Web Developer</option>
                                        <option value="Flutter Developer">Flutter Developer</option>
                                        <option value="Frontend Developer">Frontend Developer</option>
                                        <option value="Graphics Designer">Graphics Designer</option>				
                                       
                                    </select>
                                    @if($errors->has('designation'))
                                        <span class="error invalid-feedback"> {{ $errors->first('designation') }} </span>
                                    @endif
                                </div>
                          </div>


                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group @if ($errors->has('email')) has-error @endif">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control @if($errors->has('email')) is-invalid @endif" value="{{ old('email') }}" placeholder="Enter Email here">
                                    @if($errors->has('email'))
                                        <span class="error invalid-feedback">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group @if ($errors->has('date_of_birth')) has-error @endif">
                                    <label for="">Date of Birth *</label>
                                    <div class="input-group date" id="date_of_birth" data-target-input="nearest">
                                        <input value="{{ old('date_of_birth') }}" type="text" name="date_of_birth" class="form-control datetimepicker-input" data-target="#date_of_birth" autocomplete="off" placeholder="YYYY-MM-DD">
                                        <div class="input-group-append" data-target="#date_of_birth" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    @if($errors->has('date_of_birth'))
                                        <span class="error invalid-feedback">{{ $errors->first('date_of_birth') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @if ($errors->has('join_date')) has-error @endif">
                                    <label for="">Joining date *</label>
                                    <div class="input-group date" id="join_date" data-target-input="nearest">
                                        <input type="text" name="join_date" value="{{ old('join_date') }}" class="form-control datetimepicker-input" data-target="#join_date" autocomplete="off" placeholder="YYYY-MM-DD">
                                        <div class="input-group-append" data-target="#join_date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    @if($errors->has('join_date'))
                                        <span class="error invalid-feedback">{{ $errors->first('join_date') }}</span>
                                    @endif
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group @if ($errors->has('number_of_trainees')) has-error @endif">
                                    <label for="">Sallary *</label>
                                    <input type="number" name="sallary" required class="form-control @if($errors->has('sallary')) is-invalid @endif" value="{{ old('sallary') }}" placeholder="Enter sallary here">
                                    @if($errors->has('sallary'))
                                        <span class="error invalid-feedback">{{ $errors->first('sallary') }}</span>
                                    @else
                                        <span class="help-block"> This field is required. </span>
                                    @endif
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group @if ($errors->has('contact_number')) has-error @endif">
                                    <label for="">Contact Number *</label>
                                    <input type="number" name="contact_number" required class="form-control @if($errors->has('contact_number')) is-invalid @endif" value="{{ old('contact_number') }}" placeholder="Enter Contact here">
                                    @if($errors->has('contact_number'))
                                        <span class="error invalid-feedback">{{ $errors->first('contact_number') }}</span>
                                    @else
                                        <span class="help-block"> This field is required. </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group  @if ($errors->has('employee_status')) has-error @endif">
                                    <label class="control-label">Select Employee Status *</label>
                                    <select name="employee_status" class="form-control">
                                       
                                        <option value="Fulltime">Full Time</option>
                                        <option value="Contractual">Contractual</option>	
                                        <option value="Parttime">Part Time</option>
                                        <option value="Daily basis">Daily Basis</option>			
                                       
                                    </select>
                                    @if($errors->has('employee_status'))
                                        <span class="error invalid-feedback"> {{ $errors->first('employee_status') }} </span>
                                    @endif
                                </div>
                          </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group @if ($errors->has('gender')) has-error @endif">
                                <label for="">Gender *</label>
                                <div class="d-flex h5">
                                    <div class="custom-control custom-radio pr-2">
                                        <input class="custom-control-input" value="0" type="radio" id="remarks_stats_1" name="gender" checked>
                                        <label for="remarks_stats_1" class="custom-control-label">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" value="1" type="radio" id="remarks_stats_2" name="gender">
                                        <label for="remarks_stats_2" class="custom-control-label">Female</label>
                                    </div>
                                </div>
                                @if($errors->has('gender'))
                                    <span class="error invalid-feedback">{{ $errors->first('gender') }}</span>
                                @endif
                            </div>
                        </div>

                    </div>

            </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                    </div>

                </div>
            </div>
        </div>
       
            </form>
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

<!-- BEGIN PAGE LEVEL SCRIPTS -->
@section('page_level_js_scripts')
    <script>

            /// Event loading...
            $( document ).ready(function() {
            $('#office').select2();
            $("#area_of_expertise").select2({
                tags: true,
                tokenSeparators: [',']
            });
            $("#program").select2();

            $(function () {
                $('#date_of_birth').datetimepicker({
                    default: true,
                    format: 'L',
                    locale: 'BST',
                    format: 'YYYY-MM-DD'
                });
                $('#join_date').datetimepicker({
                    default: true,
                    format: 'L',
                    locale: 'BST',
                    format: 'YYYY-MM-DD',
                    placeholder: 'Select End Date'
                });
            });

            /// on load ajax 1.
            $.ajax({
                type:'POST',
                url:"{{ route('ajax.get-department-by-office') }}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                data: {office_id: $('#office').val(), old_department_id: $('#old_department_id').val()},
                success:function(html){
                    $("#department_block").html(html);
                    $('#department').select2();

                    /// on load ajax 2.
                   
                }
            });
              ///Event 1.
        $('#office').on('change', function (e) {
            e.preventDefault();
            ///event 1. > ajax 1.
            $.ajax({
                type:'POST',
                url:"{{ route('ajax.get-department-by-office') }}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                data: {office_id: $('#office').val()},
                success:function(html){
                    console.log('loading on load..');
                    $("#department_block").html(html);
                    $('#department').select2();

                    
                }
            });
        });
     });  
    </script>
@endsection
