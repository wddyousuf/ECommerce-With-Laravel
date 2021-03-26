@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
            <section class="col-md-4 m-auto">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                             src="{{ (!empty($data->image))? url('upload/user_images/'.$data->image): url('upload/noImage.jpg')}}"
                             alt="User profile picture">
                      </div>

                      <h3 class="profile-username text-center">{{ $data->name }}</h3>

                      <p class="text-muted text-center">{{ $data->role }}</p>

                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>Email</b> <p class="float-right mb-0">{{ $data->email }}</p>
                        </li>
                        <li class="list-group-item">
                          <b>Mobile</b> <p class="float-right mb-0">0{{ $data->number }}</p>
                        </li>
                        <li class="list-group-item">
                          <b>Gender</b> <p class="float-right mb-0">{{ $data->gender }}</p>
                        </li>
                        <li class="list-group-item">
                           <b>Address</b> <p class="float-right mb-0">{{ $data->address }}</p>
                        </li>
                        <li class="list-group-item">
                           <b>Status</b> <p class="float-right mb-0">{{ ($data->status == 1)?'Active':'Inactive' }}</p>
                        </li>
                      </ul>

                      <a href="{{ route('profiles.edit') }}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                    </div>
                    <!-- /.card-body -->
                  </div>
            </section>
            <!-- /.Left col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
