@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Logo</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Manage Logo</li>
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
                    All Logos
                    @if ($countlogo<1)
                    <a href="{{ route('logo.add') }}" class="btn btn-info float-right "><i class="fa fa-plus-circle ml-1 mr-1"></i>Add Logo</a>
                    @endif
                  </h3>

                </div><!-- /.card-header -->
                <div class="card-body">


                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>SL No</th>
                          <th>Logo</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        @foreach ($all_data as $key=>$logo)
                        <tbody class="{{ $logo->id }}">
                            <td>{{ $key+1 }}</td>
                            <td><img src="{{ (!empty($logo->logo))? url('upload/logo/'.$logo->logo): url('upload/noImage.jpg')}}"
                                alt="Logo" style="height: 100px; width:100px;"></td>
                            <td>
                                <a title="Edit" href="{{ route('logo.edit',$logo->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                <a title="Delete" id="delete" href="{{ route('logo.delete') }}" class="btn btn-danger btn-xs" data-token="{{ csrf_token() }}" data-id="{{ $logo->id }}><i class="fa fa-trash"></i></a>
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
