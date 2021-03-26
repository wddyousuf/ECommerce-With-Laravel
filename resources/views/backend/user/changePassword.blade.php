@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Password</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Manage Password</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-md-12">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-header">
                  <h3>
                    <i class="fa fa-edit mr-1 text-info"></i>
                    Reset Password
                    <a href="{{ route('profiles.view') }}" class="btn btn-info float-right "><i class="fa fa-list fa-xs ml-1 mr-1"></i>View Profile</a>
                  </h3>

                </div><!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('password.reset') }}" method="post" id="myForm" name="reset">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="password">Current Password</label>
                                <input type="password" id="password"  class="form-control" name="password">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="n_password">New Password</label>
                                <input type="password" id="n_password"  class="form-control" name="n_password">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="c_password">Confirm Password</label>
                                <input type="password" id="c_password"  class="form-control" name="c_password">
                            </div>
                        </div>
                        <div>
                            <input type="submit" value="Reset Password" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
            </div><!-- /.card-body -->
            </div>
            <!-- /.card -->




            </section>
            <!-- /.Left col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <script>
    $(function () {
      $("#myForm").validate({
        rules: {
          password: {
            required: true,
          },
          n_password: {
            required: true,
            minlength: 8,
          },
          c_password: {
            required: true,
            equalTo: '#n_password',
          },
        },
        messages: {
          password: {
            required: "password is Required",
          },
          n_password: {
            required: "New Password Field is Required",
            minlength: "New Password Should be at least 8 character",
          },
          c_password: {
            required: "Confirm Password Field is Required",
            equalTo: "Password Didn't Matched",
          },
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

@endsection


