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
                      Edit SubCategory
                      @else
                      Add SubCategory
                      @endif
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">
                @if (isset($editData))
                Edit SubCategory
                @else
                Add SubCategory
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
                      Edit SubCategory
                      @else
                      <i class="fa fa-plus-circle mr-1 text-info"></i>
                      Add SubCategory
                      @endif
                    <a href="{{ route('subCategory.view') }}" class="btn btn-info float-right "><i class="fa fa-list fa-xs ml-1 mr-1"></i>Manage SubCategory</a>
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
                    <form action="{{ (@$editData)?route('subCategory.update',$editData->id):route('subCategory.store') }}" method="post" id="myForm" name="addsubCategory">
                        @csrf
                        <div class="form-group col-md-4">
                            <label for="Category">Category</label>
                            <select name="Category" id="Category" class="form-control">
                                <option value="">Select Category</option>
                                @foreach ($category as $item)
                                <option value="{{ $item->id }}" {{(@$editData->cat_id==$item->id)?'selected':''}}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="name">SubCategory Name</label>
                                <input type="text" id="name" value="{{ @$editData->name }}" class="form-control" name="name">
                              </div>
                        </div>
                        <div>
                            <input type="submit" value="{{ (@$editData)?'Update SubCategory':'Add SubCategory' }}" class="btn btn-success">
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


