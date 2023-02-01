@extends('front.layouts.master')

@section('css')
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('front/assetss/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('front/assetss/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/assetss/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/assetss/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('front/assetss//css/adminlte.min.css')}}">
@endsection

@section('content')
 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">

            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Order in Website</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>

                </tr>
                </thead>
                <tbody>
                 <?php $i=0?>
                 @foreach ( $contact as $x )
                 <?php $i++ ?>
                <tr>


                  <td>{{$i}}</td>
                  <td> {{$x->name}}</td>
                  <td>{{$x->email}}</td>
                  <td>{{$x->subject}}</td>
                  <td>{{$x->message}}</td>


                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection

@section('script')
<!-- jQuery -->
<script src="{{URL::asset('front')}}/assetss/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{URL::asset('front')}}/assetss/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{URL::asset('front')}}/assetss/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{URL::asset('front')}}/assetss/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{URL::asset('front')}}/assetss/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{URL::asset('front')}}/assetss/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{URL::asset('front')}}/assetss/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{URL::asset('front')}}/assetss/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{URL::asset('front')}}/assetss/plugins/jszip/jszip.min.js"></script>
<script src="{{URL::asset('front')}}/assetss/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{URL::asset('front')}}/assetss/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{URL::asset('front')}}/assetss/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{URL::asset('front')}}/assetss/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{URL::asset('front')}}/assetss/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('front')}}/assetss/js/adminlte.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('front')}}/assetss/js/demo.js"></script>
<!-- Page specific script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
