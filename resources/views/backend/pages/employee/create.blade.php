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
            <form action="" method="post" data-bitwarden-watching="1" enctype="multipart/form-data" accept-charset="UTF-8">
                @csrf
                <div class="card-body">
                    <!-- Prerequisites section -->
                    <div class="container-fluid card ">
                        <div class="row">
                            <div class="col-md-3">
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


                       



                     
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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
                $('#start_date').datetimepicker({
                    default: true,
                    format: 'L',
                    locale: 'BST',
                    format: 'YYYY-MM-DD'
                });
                $('#end_date').datetimepicker({
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
