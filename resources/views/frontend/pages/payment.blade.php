@extends('frontend.layouts.master')
@section('content')
                        <div class="body-content">
                            <div class="container">
                                <div class="checkout-box ">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="panel-group checkout-steps" id="accordion">
                                                <!-- checkout-step-01  -->
                        <div class="panel panel-default checkout-step-01">

                            <!-- panel-heading -->
                                <div class="panel-heading">
                                <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
                                    <span>2</span>Payment Information
                                    </a>
                                </h4>
                            </div>
                            <!-- panel-heading -->

                            <div id="collapseOne" class="panel-collapse collapse in">

                                <!-- panel-body  -->
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="shopping-cart col-md-12">
                                            <div class="shopping-cart-table ">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="cart-romove item">Remove</th>
                                                                <th class="cart-description item">Image</th>
                                                                <th class="cart-product-name item">Product Name</th>
                                                                <th class="cart-qty item">Quantity</th>
                                                                <th class="cart-sub-total item">Subtotal</th>
                                                                <th class="cart-total last-item">Grandtotal</th>
                                                            </tr>
                                                        </thead><!-- /thead -->
                                                        <tbody>
                                                            @php
                                                                $content=Cart::content();
                                                                $total=0;
                                                            @endphp
                                                            @foreach ($content as $item)
                                                            <tr>
                                                                <td class="romove-item"><a href="{{ route('cart.delete',$item->rowId) }}" title="Remove" class="icon"><i class="fa fa-trash-o"></i></a></td>
                                                                <td class="cart-image">
                                                                    <a class="entry-thumbnail" href="detail.html">
                                                                        <img src="{{asset('upload/product')}}/{{ $item->options->image }}" alt="" style="height: 50px; width: 50px;">
                                                                    </a>
                                                                </td>
                                                                <td class="cart-product-name-info">
                                                                    <h4 class='cart-product-description'>{{ $item->name }}</h4>
                                                                    <div class="cart-product-info">
                                                                                        <span class="product-color">COLOR:<span>{{ $item->options->color_name }}</span></span>
                                                                    </div>
                                                                    <div class="cart-product-info">
                                                                        <span class="product-size">Size:<span>{{ $item->options->size_name }}</span></span>
                                                                    </div>
                                                                </td>
                                                                <td>{{ $item->qty }}</td>
                                                                <td class="cart-product-sub-total"><span class="cart-sub-total-price">৳ {{ $item->price }}</span></td>
                                                                <td class="cart-product-grand-total"><span class="cart-grand-total-price">৳ {{ $item->subtotal }}</span></td>
                                                            </tr>
                                                            @php
                                                            $total= $total+$item->subtotal;
                                                            @endphp
                                                            @endforeach
                                                            <tr>
                                                                <td colspan="5" style="text-align: right;">Grand Total :</td>
                                                                <td>৳ <strong>{{ $total }}</strong></td>
                                                            </tr>
                                                        </tbody><!-- /tbody -->
                                                    </table><!-- /table -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 10px;">
                                            @error('email')
                                            <div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                            @error('mobile')
                                            <div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                        <form action="{{ route('paymentstore') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="amount" value="{{ $total }}">
                                            <div class="form-group">

                                                <label for="method">Payment Method</label>
                                                <select name="method" id="method" class="form-control">
                                                    <option value="">Select Payment Method</option>
                                                    <option value="cod">Cash On Delivery</option>
                                                    <option value="bkash">Bkash</option>
                                                    <option value="rocket">Rocket</option>
                                                    <option value="nagad">Nagad</option>
                                                    <option value="card">Card</option>
                                                </select>
                                            </div>
                                            <div class="show_field" style="display: none; margin-bottom:10px;">
                                                <span class="form-control" style="margin-bottom:5px;">Bkash No: 01521309208</span>
                                                <input type="text" name="tran" class="form-control" placeholder="Transaction No">
                                            </div>
                                            <div class="show_field1" style="display: none; margin-bottom:10px;">
                                                <span class="form-control" style="margin-bottom:5px;">Rocket No: 015213092086</span>
                                                <input type="text" name="tran" class="form-control" placeholder="Transaction No">
                                            </div>
                                            <div class="show_field2" style="display: none; margin-bottom:10px;">
                                                <span class="form-control" style="margin-bottom:5px;">Nagad No: 01521309208</span>
                                                <input type="text" name="tran" class="form-control" placeholder="Transaction No">
                                            </div>
                                            <div>
                                                <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Next</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- panel-body  -->

                            </div><!-- row -->
                        </div>

					</div><!-- /.checkout-steps -->
				</div>

                <div class="checkout-progress-sidebar col-md-4">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
                            </div>
                            <div class="">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    50%
                                    </div>
                                </div>
                                <ul class="nav nav-checkout-progress list-unstyled">
                                    <li><a href="#">Billing Address <i class="fa fa-check-circle"></i></a></li>
                                    <li><a href="#">Payment Method</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
                                </div>
                            </div>

        <script>
            $(document).on('change','#method',function(){
                var method= $(this).val();
                if(method =='bkash'){
                    $('.show_field').show();
                }else if(method=='rocket'){
                    $('.show_field1').show();
                }else if(method=='nagad'){
                    $('.show_field2').show();
                }else{
                    $('.show_field').hide();
                    $('.show_field1').hide();
                    $('.show_field2').hide();
                }
            });
        </script>
@endsection



