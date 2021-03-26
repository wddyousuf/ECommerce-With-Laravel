@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Contact</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Update Contact</li>
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
                    Update Contact
                    <a href="{{ route('contact.view') }}" class="btn btn-info float-right "><i class="fa fa-list fa-xs ml-1 mr-1"></i>Manage Contact</a>
                  </h3>

                </div><!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('contact.update',$editData->id) }}" method="post" id="myForm" name="updatecontact">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" class="form-control" value="{{ $editData->address }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="number">Mobile</label>
                                <input type="number" name="number" id="number" class="form-control" value="{{ $editData->number }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $editData->email }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="fb_link">Facebook Link</label>
                                <input type="text" name="fb_link" id="fb_link" class="form-control" value="{{ $editData->fb_link }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="youtube_link">Youtube Link</label>
                                <input type="text" name="youtube_link" id="youtube_link" class="form-control" value="{{ $editData->youtube_link }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="twitter_link">Twitter Link</label>
                                <input type="text" name="twitter_link" id="twitter_link" class="form-control" value="{{ $editData->twitter_link }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="linked_in_link">Linked In Link</label>
                                <input type="text" name="linked_in_link" id="linked_in_link" class="form-control" value="{{ $editData->linked_in_link }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="gplus_link">Google+ Link</label>
                                <input type="text" name="gplus_link" id="gplus_link" class="form-control" value="{{ $editData->gplus_link }}">
                            </div>
                        </div>
                        <div>
                            <input type="submit" value="Update Contact" class="btn btn-success">
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


