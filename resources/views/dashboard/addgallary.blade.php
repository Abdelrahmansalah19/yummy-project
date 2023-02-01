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
      <div class="card text-center">
      <form action="{{url('/addgallarys')}} " method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <label for="formFileLg" class="form-label">  Upload new Photo in Gallary</label>
        <input  type="file"  name="img" class="form-control form-control-lg"  >

        <br>
        <input type="submit" value="Add" class="btn btn-primary">
      </form>
      </div>
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
