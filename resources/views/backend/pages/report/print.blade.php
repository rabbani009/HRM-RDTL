@extends('backend')

@section('page_level_css_plugins')
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <link href="{{ asset('AdminLTE-3.2.0/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

        <!-- DataTables -->
<link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endsection

@section('page_level_css_files')

@endsection

@section('content')
    <section class="content">
  
           
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Monthly Report</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-responsive">
                    <thead>
                    <tr>
                             <th>Date</th>
                            <th>Employee Name</th>
                            <th>Status</th>
                            <th>Is Friday</th>
                            <th>Intime</th>
                            <th>Outtime</th>
                            <th>Late Status</th>
                            <th>Total Duty</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($reportData as $data)
                      <tr>
                            <td>{{ $data['date'] }}</td>
                            <td>{{ $data['employee_name'] }}</td>
                            <td>{{ $data['status'] }}</td>
                            <td>
                            <p>
                                {{ $data["is_friday"] }}:
                                <span
                                    class="badge {{
                                        $data['is_friday'] ==
                                        'yes'
                                            ? 'badge-danger'
                                            : ''
                                    }}"
                                >
                                    {{
                                        $data["is_friday"] ==
                                        'no'
                                            ? "Friday"
                                            : ""
                                    }}
                                </span>
                            </p>


                            </td>
                            <td>{{ $data['intime'] ?? '' }}</td>
                            <td>{{ $data['outtime'] ?? '' }}</td>
                            <td>{{ $data['late_status'] ?? '' }}</td>
                            <td>{{ $data['total_duty'] ?? '' }}</td>
                          
                  @endforeach
                 
                   
                    </tbody>
                    <tfoot>
                    <tr>
                   
                        <th>Date</th>
                        <th>Employee Name</th>
                        <th>Status</th>
                        <th>Is Friday</th>
                        <th>Intime</th>
                        <th>Outtime</th>
                        <th>Late Status</th>
                        <th>Total Duty</th>

                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->     


    </section>

@endsection


<!-- BEGIN PAGE LEVEL PLUGINS -->
@section('page_level_js_plugins')
    <script src="{{ asset('AdminLTE-3.2.0/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <script src="{{ asset('AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/jszip/jszip.min.js') }}"></script>
    {{-- <script src="{{ asset('AdminLTE-3.2.0/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/pdfmake/vfs_fonts.js') }}"></script> --}}
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    
        <script src="{{ asset('AdminLTE-3.2.0/dist/js/adminlte.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="{{ asset('Custom/js/vfs_fonts.js') }}"></script>
@endsection
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
@section('page_level_js_scripts')
 

    

<script>
    pdfMake.fonts = {
                Roboto: {
                    normal: 'Roboto-Regular.ttf',
                    bold: 'Roboto-Medium.ttf',
                    italics: 'Roboto-Italic.ttf',
                    bolditalics: 'Roboto-MediumItalic.ttf'
                },
                nikosh: {
                    normal: "NikoshBAN.ttf",
                    bold: "NikoshBAN.ttf",
                    italics: "NikoshBAN.ttf",
                    bolditalics: "NikoshBAN.ttf"
                }
            };
    $(function () {
    $("#example1").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
    "buttons": [
    {
    text: 'PDF',
    extend: 'pdfHtml5',
    title: 'Bangladesh Business Promotion Council',
    message: '',
    orientation: 'landscape',
   
    customize: function (doc) {
    doc.pageMargins = [10,10,10,10];
    doc.defaultStyle.fontSize = 7;
    doc.styles.tableHeader.fontSize = 7;
    doc.styles.title.fontSize = 9;
    doc.defaultStyle.font = 'nikosh';
    // Remove spaces around page title
    doc.content[0].text = doc.content[0].text.trim();
    // Create a footer
    doc['footer']=(function(page, pages) {
    return {
        columns: [
            'This is your left footer column',
            {
                // This is the right column
                alignment: 'right',
                text: ['page ', { text: page.toString() },  ' of ', { text: pages.toString() }]
            }
        ],
        margin: [10, 0]
    }
    });
    // Styling the table: create style object
    var objLayout = {};
    // Horizontal line thickness
    objLayout['hLineWidth'] = function(i) { return .5; };
    // Vertikal line thickness
    objLayout['vLineWidth'] = function(i) { return .5; };
    // Horizontal line color
    objLayout['hLineColor'] = function(i) { return '#aaa'; };
    // Vertical line color
    objLayout['vLineColor'] = function(i) { return '#aaa'; };
    // Left padding of the cell
    objLayout['paddingLeft'] = function(i) { return 4; };
    // Right padding of the cell
    objLayout['paddingRight'] = function(i) { return 4; };
    // Inject the object in the document
    doc.content[1].layout = objLayout;
        }
    
    }
    
    
    ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    });
    });
    
    
    </script>
@endsection
