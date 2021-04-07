@extends('backend.layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid" id="printer">
        <div class="row" style="margin-top: 100px;">
          <div class="col-12">

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    Shopnik E-Shop.
                    <small class="float-right">Date:
                        @php
                        $now=Carbon\Carbon::now()->format('d-m-Y');
                        $admin=App\User::where('role','Admin')->first();
                        $address=App\Model\Contact::first();
                        $customer=App\User::where('id',$data->user_id)->first();

                        @endphp
                        {{ $now }}
                    </small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>{{ $admin->name }}</strong><br>
                    {{ $address->address }}<br>
                    Phone: {{ $address->number }}<br>
                    Email: {{ $address->email }}
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>{{ $customer->name }}</strong><br>
                    {{ $data['shipping']['address'] }}<br>
                    Phone: {{ $data['shipping']['number'] }}<br>
                    Email: {{ $data['shipping']['email'] }}
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #000{{ $data->id }}</b><br>
                  <b>Order ID:</b> 000{{ $data->order_no }}<br>
                  <b>Payment Method:</b> {{ strtoupper($data['method']['method']) }}<br>
                  <b>Transaction No:</b> {{ $data['method']['transaction_no'] }} <br>
                  <b>Payment Status :</b> {{ ($data['method']['transaction_no'] != NULL)?'Paid' : 'Unpaid' }}
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Serial No#</th>
                      <th>Order Date</th>
                      <th>Product Name</th>
                      <th>Qty </th>
                      <th>Color</th>
                      <th>Size</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>

                    @php
                        $order_detail=App\Model\OrderDetail::where('order_no',$data->id)->get();
                    @endphp
                    @foreach ($order_detail as $key=>$orders)
                    @php
                        if($orders['product']['discount_price']!=NULL){
                            $price=$orders['product']['discount_price'];
                        }else{
                            $price=$orders['product']['price'];
                        }
                        $qty=$orders->qty;
                        $amount=$price*$qty;
                    @endphp
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $data->created_at->format('d-m-Y') }}</td>
                      <td>{{ $orders['product']['name'] }}</td>
                      <td>{{ $orders->qty }}</td>
                      <td>{{ $orders['color']['name'] }}</td>
                      <td>{{ $orders['size']['name'] }}</td>
                      <td>{{ $amount }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">

                </div>
                <!-- /.col -->
                <div class="col-6">
                  <div class="table-responsive">
                    <table class="table">
                        @php
                            $total=$data->amount+150;
                        @endphp
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>৳ {{ $data->amount }}</td></td>
                      </tr>
                      <tr>
                        <th>Shipping:</th>
                        <td>৳ 150</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>৳ {{ $total }}</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;" onclick="prf('printer')">
                    <i class="fas fa-print"></i> Print PDF
                  </button>
                </div>
              </div>

            </div>

            <!-- /.invoice -->
          </div><!-- /.col -->
          <div class="m-auto col-md-6" >
            <p>This is a Computer Generated Invoice.No Signature Required.</p>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script>
	function printpdf(){
		window.print()=document.body.innerHTML;
	}
	function prf(paravalue){
		var divcntnt=document.getElementById(paravalue).innerHTML;
		document.body.innerHTML= divcntnt;
		window.print();
	}
	</script>
@endsection
