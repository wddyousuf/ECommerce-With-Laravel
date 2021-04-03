@extends('frontend.layouts.master')
@section('content')
@include('frontend.layouts.sidebar')

<!-- ============================================== CONTENT ============================================== -->
<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">


    {{--  Slider Part   --}}
    @include('frontend.layouts.slider')

  <!-- ============================================== INFO BOXES ============================================== -->
  <div class="info-boxes wow fadeInUp">
    <div class="info-boxes-inner">
      <div class="row">
        <div class="col-md-6 col-sm-4 col-lg-4">
          <div class="info-box">
            <div class="row">
              <div class="col-xs-12">
                <h4 class="info-box-heading green">money back</h4>
              </div>
            </div>
            <h6 class="text">30 Days Money Back Guarantee</h6>
          </div>
        </div>
        <!-- .col -->

        <div class="hidden-md col-sm-4 col-lg-4">
          <div class="info-box">
            <div class="row">
              <div class="col-xs-12">
                <h4 class="info-box-heading green">free shipping</h4>
              </div>
            </div>
            <h6 class="text">Shipping on orders over $99</h6>
          </div>
        </div>
        <!-- .col -->

        <div class="col-md-6 col-sm-4 col-lg-4">
          <div class="info-box">
            <div class="row">
              <div class="col-xs-12">
                <h4 class="info-box-heading green">Special Sale</h4>
              </div>
            </div>
            <h6 class="text">Extra $5 off on all items </h6>
          </div>
        </div>
        <!-- .col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.info-boxes-inner -->

  </div>
  <!-- /.info-boxes -->
  <!-- ============================================== INFO BOXES : END ============================================== -->
  <!-- ============================================== SCROLL TABS ============================================== -->
  <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
    <div class="more-info-tab clearfix ">
      <h3 class="new-product-title pull-left">New Products</h3>
      <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
        <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
        <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Clothing</a></li>
        <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>
        <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li>
      </ul>
      <!-- /.nav-tabs -->
    </div>
    <div class="tab-content outer-top-xs">
      <div class="tab-pane in active" id="all">
        <div class="product-slider">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
              @foreach ($product as $item)
              <div class="item item-carousel">
                <div class="products">

                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="{{ route('product.detail',$item->slug) }}"><img  src="{{asset('upload/product')}}/{{ $item->image }}" alt="{{ $item->name }}"></a> </div>
                      <!-- /.image -->

                      <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name"><a href="{{ route('product.detail',$item->slug) }}">{{ $item->name }}</a></h3>
                      <div class="rating rateit-small"></div>
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
                          <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="{{ route('product.detail',$item->slug) }}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="{{ route('product.detail',$item->slug) }}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
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
              @endforeach

            <!-- /.item -->
          </div>
          <!-- /.home-owl-carousel -->
        </div>
        <!-- /.product-slider -->
      </div>
      <!-- /.tab-pane -->

    </div>
    <!-- /.tab-content -->
  </div>
  <!-- /.scroll-tabs -->
  <!-- ============================================== SCROLL TABS : END ============================================== -->
  <!-- ============================================== WIDE PRODUCTS ============================================== -->
  <div class="wide-banners wow fadeInUp outer-bottom-xs">
    <div class="row">
      <div class="col-md-7 col-sm-7">
        <div class="wide-banner cnt-strip">
          <div class="image"> <img class="img-responsive" src="{{asset('frontend/images')}}/banners/home-banner1.jpg" alt=""> </div>
        </div>
        <!-- /.wide-banner -->
      </div>
      <!-- /.col -->
      <div class="col-md-5 col-sm-5">
        <div class="wide-banner cnt-strip">
          <div class="image"> <img class="img-responsive" src="{{asset('frontend/images')}}/banners/home-banner2.jpg" alt=""> </div>
        </div>
        <!-- /.wide-banner -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.wide-banners -->

  <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
  <!-- ============================================== FEATURED PRODUCTS ============================================== -->
  <section class="section featured-product wow fadeInUp">
    <h3 class="section-title">Featured products</h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
        @foreach ($products as $item)
        <div class="item item-carousel">
            <div class="products">
              <div class="product">
                <div class="product-image">
                  <div class="image"> <a href="{{ route('product.detail',$item->slug) }}"><img  src="{{asset('upload/product')}}/{{ $item->image }}" alt="{{ $item->name }}"></a> </div>
                  <!-- /.image -->

                  <div class="tag hot"><span>hot</span></div>
                </div>
                <!-- /.product-image -->

                <div class="product-info text-left">
                  <h3 class="name"><a href="{{ route('product.detail',$item->slug) }}">{{ $item->name }}</a></h3>
                  <div class="rating rateit-small"></div>
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
          <!-- /.item -->
        @endforeach

    </div>
    <!-- /.home-owl-carousel -->
  </section>
  <!-- /.section -->
  <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
  <!-- ============================================== WIDE PRODUCTS ============================================== -->
  <div class="wide-banners wow fadeInUp outer-bottom-xs">
    <div class="row">
      <div class="col-md-12">
        <div class="wide-banner cnt-strip">
          <div class="image"> <img class="img-responsive" src="{{asset('frontend/images')}}/banners/home-banner.jpg" alt=""> </div>
          <div class="strip strip-text">
            <div class="strip-inner">
              <h2 class="text-right">New Mens Fashion<br>
                <span class="shopping-needs">Save up to 40% off</span></h2>
            </div>
          </div>
          <div class="new-label">
            <div class="text">NEW</div>
          </div>
          <!-- /.new-label -->
        </div>
        <!-- /.wide-banner -->
      </div>
      <!-- /.col -->

    </div>
    <!-- /.row -->
  </div>
  <!-- /.wide-banners -->
  <!-- ============================================== WIDE PRODUCTS : END ============================================== -->

  <!-- ============================================== FEATURED PRODUCTS ============================================== -->
  <section class="section wow fadeInUp new-arriavls">
    <h3 class="section-title">New Arrivals</h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
        @foreach ($product as $item)
        <div class="item item-carousel">
            <div class="products">
              <div class="product">
                <div class="product-image">
                  <div class="image"> <a href="{{ route('product.detail',$item->slug) }}"><img  src="{{asset('upload/product')}}/{{ $item->image }}" alt="{{ $item->name }}"></a> </div>
                  <!-- /.image -->

                  <div class="tag new"><span>new</span></div>
                </div>
                <!-- /.product-image -->

                <div class="product-info text-left">
                  <h3 class="name"><a href="{{ route('product.detail',$item->slug) }}">{{ $item->name }}</a></h3>
                  <div class="rating rateit-small"></div>
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
        @endforeach

      <!-- /.item -->
    </div>
    <!-- /.home-owl-carousel -->
  </section>
  <!-- /.section -->
  <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

</div>
<!-- /.homebanner-holder -->
<!-- ============================================== CONTENT : END ============================================== -->
</div>
<!-- /.row -->
<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">
<div class="logo-slider-inner">
  <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
    <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="{{asset('frontend/images')}}/brands/brand1.png" src="{{asset('frontend/images')}}/blank.gif" alt=""> </a> </div>
    <!--/.item-->

    <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="{{asset('frontend/images')}}/brands/brand2.png" src="{{asset('frontend/images')}}/blank.gif" alt=""> </a> </div>
    <!--/.item-->

    <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('frontend/images')}}/brands/brand3.png" src="{{asset('frontend/images')}}/blank.gif" alt=""> </a> </div>
    <!--/.item-->

    <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('frontend/images')}}/brands/brand4.png" src="{{asset('frontend/images')}}/blank.gif" alt=""> </a> </div>
    <!--/.item-->

    <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('frontend/images')}}/brands/brand5.png" src="{{asset('frontend/images')}}/blank.gif" alt=""> </a> </div>
    <!--/.item-->

    <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('frontend/images')}}/brands/brand6.png" src="{{asset('frontend/images')}}/blank.gif" alt=""> </a> </div>
    <!--/.item-->

    <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('frontend/images')}}/brands/brand2.png" src="{{asset('frontend/images')}}/blank.gif" alt=""> </a> </div>
    <!--/.item-->

    <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('frontend/images')}}/brands/brand4.png" src="{{asset('frontend/images')}}/blank.gif" alt=""> </a> </div>
    <!--/.item-->

    <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('frontend/images')}}/brands/brand1.png" src="{{asset('frontend/images')}}/blank.gif" alt=""> </a> </div>
    <!--/.item-->

    <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('frontend/images')}}/brands/brand5.png" src="{{asset('frontend/images')}}/blank.gif" alt=""> </a> </div>
    <!--/.item-->
  </div>
  <!-- /.owl-carousel #logo-slider -->
</div>
<!-- /.logo-slider-inner -->

</div>
<!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
</div>
<!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
@endsection
