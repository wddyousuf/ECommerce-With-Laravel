@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Pending Orders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Manage Pending Orders</li>
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
                    Pending Orders

                    </h3>

                </div><!-- /.card-header -->
                <div class="card-body">


                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>SL No</th>
                          <th>Order No</th>
                          <th>Product Name</th>
                          <th>Qty</th>
                          <th>Payment Method</th>
                          <th>Transaction No</th>
                          <th>Address</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($data as $key=>$order)
                        @php
                            $order_detail=App\Model\OrderDetail::where('order_no',$order->id)->get();
                        @endphp
                        <tr class="{{ $order->id }}">
                            <td>{{ $key+1 }}</td>
                            <td>{{ $order->order_no }}</td>
                            <td>
                                @foreach($order_detail as $items)
                                {{ $items['product']['name'] }} <br>
                                @endforeach
                            </td>
                            <td>
                                @foreach($order_detail as $items)
                                {{ $items->qty }} <br>
                                @endforeach
                            </td>
                            <td>
                                {{ strtoupper($order['method']['method']) }}
                            </td>
                            <td>{{ $order['method']['transaction_no'] }}</td>
                            <td>{{ $order['shipping']['address'] }}</td>
                            <td>
                                <a title="Approve" href="{{ route('approve',$order->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-check-circle"></i></a>
                                <a title="Cancel" href="{{ route('cancel',$order->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
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
