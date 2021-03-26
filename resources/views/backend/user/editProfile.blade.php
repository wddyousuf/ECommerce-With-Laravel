@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Update Profile</li>
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
                    <i class="fas fa-user mr-1 text-info"></i>
                    Profile
                    <a href="{{ route('profiles.view') }}" class="btn btn-info float-right "><i class="fa fa-list fa-xs ml-1 mr-1"></i>View Profile</a>
                  </h3>

                </div><!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('profiles.update') }}" method="post" enctype="multipart/form-data" id="myForm" name="regstr">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="name">Name</label>
                                <input type="text" id="name" value="{{ $editData->name }}" class="form-control" name="name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="email" id="email" value="{{ $editData->email }}" class="form-control" name="email">
                                <span>{{ ($errors->has('email')) ? $errors->first('email') : '' }}</span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="number">Mobile</label>
                                <input type="number" id="number" value="0{{ $editData->number }}" class="form-control" name="number">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="address">Address</label>
                                <input type="text" id="address" value="{{ $editData->address }}" class="form-control" name="address">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="gender">Gender</label>
                                <div class="col-sm-12 form-control">
                                  <input type="radio" name="gender" id="gender" value="Male" class="col-sm-1" {{ ($editData->gender=="Male")?"checked":"" }}>Male
                                  <input type="radio" name="gender" id="gender" value="Female" class="col-sm-1" {{ ($editData->gender=="Female")?"checked":"" }}>Female
                                </div>
                            </div>
                          <div class="form-group col-md-4">
                            <label for="image">Image</label>
                            <input type="file" id="image" class="form-control" name="image">
                          </div>
                          <div class="form-group col-md-4">
                            <img src="{{ (!empty($editData->image))? url('upload/user_images/'.$editData->image): url('upload/noImage.jpg')}}" id="showImage" style="height: 150px; width: 150px; border: 1px solid black;" alt="">
                          </div>

                        </div>
                        <div>
                            <input type="submit" value="Update Profile" class="btn btn-success">
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




@endsection


