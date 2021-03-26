<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style type="text/css">
    .notifyjs-corner{
        z-index: 10000 !important;
    }
    .avoid td{
        max-width: 150px;
    }
</style>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"></script>
{{--  Sweet Alert   --}}
{{--  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>  --}}
<script src="{{ asset('/assets') }}/sweetalert/sweetalert.js"></script>
<link rel="stylesheet" href="{{ asset('/assets') }}/sweetalert/sweetalert.css">
  <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('/assets') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="{{ asset('/assets') }}/plugins/jquery-validation/jquery.validate.min.js"></script>
    <!--Notify JS-->
<!--Date Picker-->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
{{--  Bootstrap Tags Input   --}}
<link rel="stylesheet" href="{{ asset('/assets') }}/bootstrap-tagsinput.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/assets') }}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  {{--  <script src="{{ asset('/assets') }}/plugins/jquery/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">  --}}
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center float-left">
    <img class="animation__shake" src="{{ asset('/assets') }}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
          <span>{{Auth::user()->name }}</span>
        </a>
        <!--Log out -->
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Logout" class="dropdown-item dropdown-footer">Log Out</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ (!empty(Auth::user()->image))? url('upload/user_images/'.Auth::user()->image): url('upload/noImage.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      @include('backend.layouts.sidebar')
    </div>
    <!-- /.sidebar -->
  </aside>


  @yield('content')

  @if (session()->has('success'))
      <script type="text/javascript">
        $(function(){
            $.notify("{{ session()->get('success')}}",{globalPosition:'top right',className:'success' });
        });
      </script>
  @endif
  @if (session()->has('error'))
  <script type="text/javascript">
    $(function(){
        $.notify("{{ session()->get('error')}}",{globalPosition:'top right',className:'error' });
    });
  </script>
@endif


  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://www.facebook.com/ysaikat">Md. Yousuf Hossain</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.1.0-rc
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- jquery-validation -->

<script src="{{ asset('/assets') }}/plugins/jquery-validation/additional-methods.min.js"></script>
<script>
    $(function () {
      $("#myForm").validate({
        rules: {
            role: {
                required: true,
              },
            email: {
                required: true,
                email: true,
          },
          password: {
            required: true,
            minlength: 8,
          },
          password2: {
            required: true,
            equalTo: '#password',
          },
          number:{
            required: true,
          },
          image:{
            required: true,
          },
          name:{
            required: true,
          },
          category:{
            required: true,
          },
          brand:{
            required: true,
          },
          price:{
            required: true,
          },
          stock:{
            required: true,
          },
          description:{
            required: true,
          },
          long_description:{
            required: true,
          },
        },
        messages: {
          email: {
            required: "Please enter a email address",
            email: "Please enter a vaild email address",
          },
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 8 characters long",
          },
          password2: {
            required: "Confirm Password Field is Required",
            equalTo: "Password doesn't match",
          },
          number: "Mobile Number is required",
          image: "Image is required",
          role: "Role Selection is required",
          name: "Name is required",
          category: "Category is required",
          brand: "Brand is required",
          price: "Price is required",
          stock: "Stock is required",
          description: "Description is required",
          long_description: "Long description is required",
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
    </script>


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/assets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('/assets') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('/assets') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('/assets') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('/assets') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('/assets') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('/assets') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('/assets') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('/assets') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('/assets') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('/assets') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/assets') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/assets') }}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('/assets') }}/dist/js/pages/dashboard.js"></script>

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
<script src="{{ asset('/assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('/assets') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('/assets') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
{{--  Sweet Alert   --}}
{{--  <script>
    $(function(){
        $(document).on('click','#delete',function(e){
            e.preventDefault();
            var link=$(this).attr("href");
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link;
                  Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                  )
                }
              })
        });
    });
</script>  --}}

<script>
    $(document).ready(function(){
        $(document).on('click','#delete',function(){
            var actionTo= $(this).attr('href');
            var token = $(this).attr('data-token');
            var id=$(this).attr('data-id');
            swal({
                title: "Are You Sure?",
                type: "success",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){
                if(isConfirm){
                    $.ajax({
                        url:actionTo,
                        type:'post',
                        data: {id:id,_token:token},
                        success: function(data){
                            swal({
                                title: "Deleted!",
                                type: "success"
                            },
                            function(isConfirm){
                                if(isConfirm){
                                    $('.'+id).fadeOut();
                                }
                            });
                        }
                    });
                }else{
                    swal("Cancelled","","error")
                }
            });
            return false;
        });
    });
</script>

{{--  File SHow   --}}
<script>
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader =new FileReader();
            reader.onload=function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
{{--  DatePicker   --}}
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        format : 'yyyy-mm-dd'
    });
</script>
<!-- Select2 -->
  <script src="{{ asset('/assets') }}/plugins/select2/js/select2.full.min.js"></script>
  <script>
    $(function(){
        $('.select2').select2();
    });
  </script>
  {{--  Bootstrap Tags Input   --}}
  <script src="{{ asset('/assets') }}/bootstrap-tagsinput.js"></script>
</body>
</html>
