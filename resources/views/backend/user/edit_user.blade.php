@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Update User</li>
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
                    <i class="fas fa-users mr-1 text-info"></i>
                    All Users
                    <a href="{{ route('user.view') }}" class="btn btn-info float-right "><i class="fa fa-list fa-xs ml-1 mr-1"></i>Users List</a>
                  </h3>

                </div><!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('user.update',$editData->id) }}" method="post" enctype="multipart/form-data" id="myForm" name="regstr">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="role">User Role</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="" disabled>Select</option>
                                    <option value="Admin" {{ ($editData->role=="Admin")?"selected":"" }}>Admin</option>
                                    <option value="Editor" {{ ($editData->role=="Editor")?"selected":"" }}>Editor</option>
                                    <option value="User" {{ ($editData->role=="User")?"selected":"" }}>User</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">User Name</label>
                                <input type="text" id="name" value="{{ $editData->name }}" class="form-control" name="name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">User Email</label>
                                <input type="email" id="email" value="{{ $editData->email }}" class="form-control" name="email">
                                <span>{{ ($errors->has('email')) ? $errors->first('email') : '' }}</span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="number">Mobile</label>
                                <input type="number" id="number" value="0{{ $editData->number }}" class="form-control" name="number">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="address">User Address</label>
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

                        </div>
                        <div>
                            <input type="submit" value="Update User" class="btn btn-success">
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


