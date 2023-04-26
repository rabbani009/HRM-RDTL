@extends('backend')

@section('page_level_css_plugins')

@endsection

@section('page_level_css_files')

@endsection

@section('content')
    <section class="content">

        <div class="card">
            <div class="card-header">
                <h1 class="card-title">{{ $commons['content_title'] }}</h1>

                <div class="card-tools">
                    Note::
                </div>
            </div>
            <form action="{{ route('holiday.store') }}" method="post" data-bitwarden-watching="1" enctype="multipart/form-data" accept-charset="UTF-8">
                @csrf
                <div class="card-body row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Add New Holiday</label>
                        <input type="text" name="holiday_name" class="form-control @if($errors->has('holiday_name')) is-invalid @endif" value="{!! old('holiday_name') !!}" placeholder="Enter Holiday Name">
                        @if($errors->has('holiday_name'))
                            <span class="error invalid-feedback">{!! $errors->first('holiday_name') !!}</span>
                        @else
                            <span class="help-block"style="color:maroon"> *This field is required. </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Holiday Date</label>
                        <input type="date" name="holiday_date" class="form-control @if($errors->has('holiday_date')) is-invalid @endif" value="{!! old('holiday_date') !!}">
                        @if($errors->has('holiday_date'))
                            <span class="error invalid-feedback">{!! $errors->first('holiday_date') !!}</span>
                        @else
                            <span class="help-block"style="color:maroon"> *This field is required. </span>
                        @endif
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </section>

    @include('backend.pages.holiday._table')
@endsection


<!-- BEGIN PAGE LEVEL PLUGINS -->
@section('page_level_js_plugins')

@endsection
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
@section('page_level_js_scripts')
    <script>


    </script>
@endsection
