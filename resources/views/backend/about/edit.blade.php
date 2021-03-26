@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update About</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Update About</li>
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
                    Update About
                    <a href="{{ route('about.view') }}" class="btn btn-info float-right "><i class="fa fa-list fa-xs ml-1 mr-1"></i>Manage About</a>
                  </h3>

                </div><!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('about.update',$editData->id) }}" method="post" id="myForm" name="updateabout">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="about">Description</label>
                                <textarea id="about" class="form-control" name="about" rows="4" cols="15">{{ $editData->about }}</textarea>
                            </div>
                        </div>
                        <div>
                            <input type="submit" value="Update About" class="btn btn-success">
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


