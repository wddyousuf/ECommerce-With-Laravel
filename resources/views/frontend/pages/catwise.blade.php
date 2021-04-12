@extends('frontend.layouts.master')
@section('content')



<div class='row single-product'>
    @include('frontend.layouts.sidebar')
    <div class='col-md-9'>
        <script>
            var ratings=[];
            var i=0;
        </script>
            @foreach ($catwise as $item)
            @php
                    $count=0;
                    $rating=0;
                  $review=App\Model\ProductReview::where('product_id',$item->id)->get();
              @endphp
              @foreach ($review as $itesm)
                            @php
                            $count = $count+1;
                            $rating=$itesm->review+$rating;
                            @endphp
                            @endforeach
                            @php
                                if ($count != 0)
                                $rate=$rating/$count;
                                else
                                $rate=0;
                            @endphp
                <div class="item">
                    <div class="products col-sm-3">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="{{ route('product.detail',$item->slug) }}"><img  src="{{asset('upload/product')}}/{{ $item->image }}" alt="{{ $item->name }}"></a> </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="{{ route('product.detail',$item->slug) }}">{{ $item->name }}</a></h3>
                            <div class="rateYo"></div>
                            <div class="description"></div>
                            <div class="product-price">
                              @if (!empty($item->discount_price))
                                  <span class="price"> ৳{{ $item->discount_price }} </span>
                                  <span class="price-before-discount">৳{{ $item->price }}</span>
                              @else
                                  <span class="price">৳ {{ $item->price }}</span>
                              @endif
                            <!-- /.product-price -->
                          </div>

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="lnk">
                                    <a href="{{ route('product.detail',$item->slug) }}" data-toggle="tooltip" class="add-to-cart" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{ route('product.detail',$item->slug) }}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="{{ route('product.detail',$item->slug) }}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                </div>
                <script>
                    ratings[i]={{ round($rate,2) }};
                    i++;
                  </script>
            @endforeach
          <!-- /.item -->
    </div>
    <div class="clearfix"></div>
</div><!-- /.row -->
<script>
    $(function () {
        for (var j = 0; j <= i; j++){
            $(".rateYo").eq(j).rateYo({
                rating:ratings[j],
                starWidth: "15px",
              });
        }


      });

</script>
@endsection
