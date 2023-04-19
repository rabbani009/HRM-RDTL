<section class="content">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title"></h1>

            <div class="card-tools">
                Note:: All Employees Attendence List
            </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body p-0">
            <table class="table table-responsive-md table-responsive-lg table-responsive-md text-center">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Attendence Date</th>
                        <th>In Time</th>
                        <th>Out Time</th>
                        <th>Late Status</th>
                        <th>Total Duty</th>

                        @include('backend.pages.commons.timestamps_th')
                        

                        <!-- <th class="custom_actions">Actions</th> -->
                    </tr>
                </thead>
                <tbody>
                @foreach($employees as $row)
                    <tr>
                        <td>{{ $loop->iteration }}.</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->attend_date }}</td>
                        <td class="custom_actions">{{ $row->intime }}</td>
                        <td class="custom_actions">{{ $row->outtime }}</td>
                        <td>{{ $row->late_status }}</td>
                        <td>{{ $row->total_duty }}</td>
                     
                        @include('backend.pages.commons.timestamps_td')

                        <!-- <td class="custom_actions">
                            <div class="btn-group">
                                
                                <a href="" class="btn btn-flat btn-outline-info btn-sm" data-toggle="tooltip" title="Edit">
                                    <i class="far fa-edit"></i>
                                </a>
                                <form method="post" class="list_delete_form" action="" accept-charset="UTF-8" >
                                    {!! csrf_field() !!}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-flat btn-outline-danger btn-sm" data-toggle="tooltip" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td> -->
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            {{ $employees->withQueryString()->links('pagination::bootstrap-5') }}
        </div>

    </div>

</section>