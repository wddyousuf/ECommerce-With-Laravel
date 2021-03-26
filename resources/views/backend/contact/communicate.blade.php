@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">All Messages</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">All Messages</li>
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
                    <i class="mr-1 text-info"></i>
                    All Messages
                    </h3>

                </div><!-- /.card-header -->
                <div class="card-body">


                    <table id="example1" class="table table-bordered table-striped table-responsive">
                        <thead>
                        <tr>
                          <th>SL No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Address</th>
                          <th>Message</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        @foreach ($data as $key=>$contact)
                        <tbody class="$contact->id">
                            <td>{{ $key+1 }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->number }}</td>
                            <td>{{ $contact->address }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>
                                <a title="Delete" id="delete" href="{{ route('communicate.delete') }}" class="btn btn-danger btn-xs" data-token="{{ csrf_token() }}" data-id="{{ $contact->id }}><i class="fa fa-trash"></i></a>
                            </td>
                        </tbody>
                        @endforeach

                    </table>
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
