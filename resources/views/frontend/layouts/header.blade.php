<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            @if (@Auth::user()->id !=NULL)
            <li><a href="{{ route('dashboard') }}"><i class="icon fa fa-user"></i>Dashboard</a></li>
            <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
            <li><a href="{{ route('shopping.cart') }}"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
            @if (@Auth::user()->id != NULL && @Session::get('shipping_id')==NULL)
            <li><a href="{{ route('checkout') }}"><i class="icon fa fa-check"></i>Checkout</a></li>
            @elseif(@Auth::user()->id != NULL && @Session::get('shipping_id') !=NULL)
            <li><a href="{{ route('payment') }}"><i class="icon fa fa-check"></i>Checkout</a></li>
            @else
            <li><a href="{{ route('cstmr.login') }}"><i class="icon fa fa-check"></i>Checkout</a></li>
            @endif
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon fa fa-lock"></i>Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            @else
            <li><a href="#"><i class="icon fa fa-user"></i>My Account</a></li>
            <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
            <li><a href="{{ route('shopping.cart') }}"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
            @if (@Auth::user()->id != NULL && @Session::get('shipping_id')==NULL)
            <li><a href="{{ route('checkout') }}"><i class="icon fa fa-check"></i>Checkout</a></li>
            @elseif(@Auth::user()->id != NULL && @Session::get('shipping_id') !=NULL)
            <li><a href="{{ route('payment') }}"><i class="icon fa fa-check"></i>Checkout</a></li>
            @else
            <li><a href="{{ route('cstmr.login') }}"><i class="icon fa fa-check"></i>Checkout</a></li>
            @endif
            <li><a href="{{ route('cstmr.login') }}"><i class="icon fa fa-lock"></i>Login</a></li>
            @endif
          </ul>
        </div>
        <!-- /.cnt-account -->

        <div class="cnt-block">
          <ul class="list-unstyled list-inline">
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">BDT</a></li>
                <li><a href="#">USD</a></li>
                <li><a href="#">RS</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-small"> <a href="{{ route('track') }}"><span class="value">Track Order </span></a>

            </li>
          </ul>
          <!-- /.list-unstyled -->
        </div>
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.header-top -->
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="{{ url('') }}"> <img src="{{asset('upload/logo')}}/{{ $logo->logo }}" alt="logo"> </a> </div>
          <!-- /.logo -->
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->

        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
          <!-- /.contact-row -->
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form action="{{ route('find.product') }}" method="POST">
                @csrf
              <div class="control-group">
                <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" >
                      <li class="menu-header">Computer</li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>
                    </ul>
                  </li>
                </ul>
                <input class="search-field" placeholder="Search here..." autocomplete="off"  name="name" id="productSearch"/>
                <button class="search-button" type="submit" ></button> </div>
            </form>
          </div>
          <div class="col-md-12" id="productStatus"></div>
          <!-- /.search-area -->
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->

        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
          @php
          $content=Cart::content();
          $count=0;
          $total=0;
          @endphp
          @foreach ($content as $item)
            @php
            $count++;
            $total= $total+$item->subtotal;
            @endphp
          @endforeach

          <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
              <div class="basket-item-count"><span class="count">{{ $count }}</span></div>
              <div class="total-price-basket"> <span class="lbl">cart -</span> <span class="total-price"> <span class="sign">??? </span><span class="value">{{ $total }}</span> </span> </div>
            </div>
            </a>
            <ul class="dropdown-menu">
            @php
          $content=Cart::content();
          $total=0;
          @endphp
          @foreach ($content as $item)
          <li>
            <div class="cart-item product-summary">
              <div class="row">
                <div class="col-xs-4">
                  <div class="image"> <a href="#"><img src="{{asset('upload/product')}}/{{ $item->options->image }}" alt="{{ $item->name }}"></a> </div>
                </div>
                <div class="col-xs-7">
                  <h3 class="name"><a href="#">{{ $item->name }}</a></h3>
                  <div class="price">Qty: {{ $item->qty }}</div>
                  <div class="price">Price: ??? {{ $item->price }}</div>

                </div>
                <div class="col-xs-1 action"> <a href="{{ route('cart.delete',$item->rowId) }}"><i class="fa fa-trash"></i></a> </div>
              </div>
            </div>
            <!-- /.cart-item -->

            <div class="clearfix"></div>
              <hr>

          </li>
          @php
          $total= $total+$item->subtotal;
          @endphp
         @endforeach
         <div class="clearfix"></div>
                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>??? {{ $total }}</span> </div>
                  <div class="clearfix"></div>
                  <a href="{{ route('shopping.cart') }}" class="btn btn-upper btn-primary btn-block m-t-20">View Cart</a> </div>
                  @if (@Auth::user()->id != NULL)
                  <a href="{{ route('checkout') }}" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>
                  @else
                  <a href="{{ route('cstmr.login') }}" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>
                  @endif

                <!-- /.cart-total-->
            </ul>
            <!-- /.dropdown-menu-->
          </div>
          <!-- /.dropdown-cart -->

          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  </div>
  <!-- /.main-header -->

  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown yamm-fw"> <a href="{{ url('home') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a> </li>
                @foreach ($category as $item)
                @php
                $cat=App\Model\Category::where('id',$item->cat_id)->first();
                $sub_cat=App\Model\SubCategory::where('cat_id',$item->cat_id)->get();
                @endphp
                <li class="dropdown yamm mega-menu"> <a href="{{ route('category.product',$cat->name) }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">{{ $cat->name }}</a>
                  <ul class="dropdown-menu container">
                    <li>
                      <div class="yamm-content ">
                        <div class="row">
                            @foreach ($sub_cat as $scat)
                            @php
                            $subsub_cat=App\Model\SubSubCategory::where('subcat_id',$scat->id)->get();
                            @endphp
                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                <h2 class="title">{{ $scat->name }}</h2>
                                <ul class="links">
                                    @foreach ($subsub_cat as $sscat)
                                    <li><a href="{{ route('product.catwise',$sscat->id) }}">{{ $sscat->name }}</a></li>
                                    @endforeach
                                </ul>
                              </div>
                              <!-- /.col -->
                            @endforeach


                          <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="{{asset('frontend/images')}}/banners/top-menu-banner.jpg" alt=""> </div>
                          <!-- /.yamm-content -->
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                @endforeach
                {{--  @foreach ($category as $item)
                <li class="dropdown hidden-sm"> <a href="category.html"> {{ $item['category']['name'] }} <span class="menu-label new-menu hidden-xs">new</span> </a> </li>
                @endforeach  --}}
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                              <li><a href="{{ url('') }}">Home</a></li>
                              <li><a href="category.html">Category</a></li>
                              <li><a href="detail.html">Detail</a></li>
                              <li><a href="{{ route('shopping.cart') }}">Shopping Cart Summary</a></li>
                              <li><a href="checkout.html">Checkout</a></li>
                              <li><a href="blog.html">Blog</a></li>
                              <li><a href="{{ route('about') }}">About Us</a></li>
                              <li><a href="{{ route('contact') }}">Contact Us</a></li>
                              <li><a href="">Sign In</a></li>
                              <li><a href="my-wishlist.html">Wishlist</a></li>
                              <li><a href="terms-conditions.html">Terms and Condition</a></li>
                              <li><a href="track-orders.html">Track Orders</a></li>
                              <li><a href="product-comparison.html">Product-Comparison</a></li>
                              <li><a href="faq.html">FAQ</a></li>
                              <li><a href="404.html">404</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                @if (@Auth::user()->id !=NULL)
                <li class="dropdown  navbar-right special-menu"> <a href="{{ route('orders') }}">My Orders</a> </li>
                @endif
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer -->
          </div>
          <!-- /.navbar-collapse -->

        </div>
        <!-- /.nav-bg-class -->
      </div>
      <!-- /.navbar-default -->
    </div>
    <!-- /.container-class -->

  </div>
  <!-- /.header-nav -->
  <!-- ============================================== NAVBAR : END ============================================== -->

</header>

<!-- ============================================== HEADER : END ============================================== -->

<script>
    $(document).ready(function(){
        $('#productSearch').keyup(function(){
            var name =$(this).val();
            if(name != ''){
                $.ajax({
                    url: "{{ route('get.product') }}",
                    type: "GET",
                    data:{name:name},
                    success: function(data){
                        $('#productStatus').fadeIn();
                        $('#productStatus').html(data);
                    }
                });
            }
        });
    });
    $(document).on('click','li',function(){
        $('#productSearch').val($(this).text());
        $('#productStatus').fadeOut();
    });
</script>
