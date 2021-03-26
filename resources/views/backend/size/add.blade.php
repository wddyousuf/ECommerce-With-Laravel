@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">
                @if (isset($editData))
                      Edit Size
                      @else
                      Add Size
                      @endif
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">
                @if (isset($editData))
                Edit Size
                @else
                Add Size
                @endif
            </li>
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
                      @if (isset($editData))
                      <i class="fa fa-edit mr-1 text-info"></i>
                      Edit Size
                      @else
                      <i class="fa fa-plus-circle mr-1 text-info"></i>
                      Add Size
                      @endif
                    <a href="{{ route('size.view') }}" class="btn btn-info float-right "><i class="fa fa-list fa-xs ml-1 mr-1"></i>Manage Colors</a>
                  </h3>
                  <div class="col-md-4">
                      @error('name')
                      <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>{{ $message }}</strong>
                        </div>
                      @enderror
                    </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ (@$editData)?route('size.update',$editData->id):route('size.store') }}" method="post" id="myForm" name="addcolor">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="name">Size</label>
                                <input type="text" id="name" value="{{ @$editData->name }}" class="form-control" name="name">
                              </div>
                        </div>
                        <div>
                            <input type="submit" value="{{ (@$editData)?'Update Size':'Add Size' }}" class="btn btn-success">
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


