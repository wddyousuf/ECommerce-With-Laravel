@extends('frontend.layouts.master')
@section('content')
    <div class="body-content">
        <div class="container">
            <table class="table table-bordered table-striped">
                <tr>
                    <td>Order No</td>
                    <td>Product</td>
                    <td>Image</td>
                    <td>Color</td>
                    <td>Size</td>
                    <td>Qty</td>
                    <td>Status</td>
                    <td>Order Date</td>
                    <td>Amount</td>
                    <td>Payment Method</td>
                </tr>
                @foreach ($order as $item)
                @php
                    $order_detail=App\Model\OrderDetail::where('order_no',$item->id)->get();
                @endphp
                <tr>
                    <td>{{ $item->order_no }}</td>
                    <td>
                        @foreach($order_detail as $items)
                        {{ $items['product']['name'] }} <br>
                        @endforeach
                    </td>
                    <td>
                        @foreach ($order_detail as $items)
                        <img class="profile-user-img img-fluid"
                        src="{{ (!empty($items['product']['image']))? url('upload/product/'.$items['product']['image']): url('upload/noImage.jpg')}}"
                        alt="{{ $items['product']['name'] }}" style="height: 50px; width: 50px;">
                        @endforeach
                    </td>
                    <td>
                        @foreach($order_detail as $items)
                        {{ $items['color']['name'] }} <br>
                        @endforeach
                    </td>
                    <td>
                        @foreach($order_detail as $items)
                        {{ $items['size']['name'] }} <br>
                        @endforeach
                    </td>
                    <td>
                        @foreach($order_detail as $items)
                        {{ $items->qty }} <br>
                        @endforeach
                    </td>
                    <td>{{ ($item->status==0)? 'Pending' : 'Approved' }}</td>
                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                    <td>৳ {{ $item->amount }}</td>
                    <td>{{ strtoupper($item['method']['method']) }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection



