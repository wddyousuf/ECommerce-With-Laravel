<!-- ============================================== SIDEBAR ============================================== -->
<div class="col-xs-12 col-sm-12 col-md-3 sidebar">

  <!-- ================================== TOP NAVIGATION ================================== -->
  <div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
    <nav class="yamm megamenu-horizontal">
      <ul class="nav">
          @foreach ($category as $item)
          @php
            $cat=App\Model\Category::where('id',$item->cat_id)->first();
            $sub_cat=App\Model\SubCategory::where('cat_id',$item->cat_id)->get();
          @endphp
          <li class="dropdown menu-item"> <a href="{{ route('category.product',$cat->name) }}" class="dropdown-toggle" ><i class="icon fa fa-{{ $cat->faname }}" aria-hidden="true"></i>{{ $cat->name }}</a>
            <!-- /.dropdown-menu --> </li>
          <!-- /.menu-item -->
          @endforeach



        <!-- /.menu-item -->

      </ul>
      <!-- /.nav -->
    </nav>
    <!-- /.megamenu-horizontal -->
  </div>
  <!-- /.side-menu -->
  <!-- ================================== TOP NAVIGATION : END ================================== -->

  <!-- ============================================== HOT DEALS ============================================== -->
  <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">hot deals</h3>
    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
      <div class="item">
        <div class="products">
          <div class="hot-deal-wrapper">
            <div class="image"> <img src="{{asset('frontend/images')}}/hot-deals/p25.jpg" alt=""> </div>
            <div class="sale-offer-tag"><span>49%<br>
              off</span></div>
            <div class="timing-wrapper">
              <div class="box-wrapper">
                <div class="date box"> <span class="key">120</span> <span class="value">DAYS</span> </div>
              </div>
              <div class="box-wrapper">
                <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
              </div>
              <div class="box-wrapper">
                <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
              </div>
              <div class="box-wrapper hidden-md">
                <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
              </div>
            </div>
          </div>
          <!-- /.hot-deal-wrapper -->

          <div class="product-info text-left m-t-20">
            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
            <div class="rating rateit-small"></div>
            <div class="product-price"> <span class="price"> $600.00 </span> <span class="price-before-discount">$800.00</span> </div>
            <!-- /.product-price -->

          </div>
          <!-- /.product-info -->

          <div class="cart clearfix animate-effect">
            <div class="action">
              <div class="add-cart-button btn-group">
                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
              </div>
            </div>
            <!-- /.action -->
          </div>
          <!-- /.cart -->
        </div>
      </div>
      <div class="item">
        <div class="products">
          <div class="hot-deal-wrapper">
            <div class="image"> <img src="{{asset('frontend/images')}}/hot-deals/p5.jpg" alt=""> </div>
            <div class="sale-offer-tag"><span>35%<br>
              off</span></div>
            <div class="timing-wrapper">
              <div class="box-wrapper">
                <div class="date box"> <span class="key">120</span> <span class="value">Days</span> </div>
              </div>
              <div class="box-wrapper">
                <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
              </div>
              <div class="box-wrapper">
                <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
              </div>
              <div class="box-wrapper hidden-md">
                <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
              </div>
            </div>
          </div>
          <!-- /.hot-deal-wrapper -->

          <div class="product-info text-left m-t-20">
            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
            <div class="rating rateit-small"></div>
            <div class="product-price"> <span class="price"> $600.00 </span> <span class="price-before-discount">$800.00</span> </div>
            <!-- /.product-price -->

          </div>
          <!-- /.product-info -->

          <div class="cart clearfix animate-effect">
            <div class="action">
              <div class="add-cart-button btn-group">
                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
              </div>
            </div>
            <!-- /.action -->
          </div>
          <!-- /.cart -->
        </div>
      </div>
      <div class="item">
        <div class="products">
          <div class="hot-deal-wrapper">
            <div class="image"> <img src="{{asset('frontend/images')}}/hot-deals/p10.jpg" alt=""> </div>
            <div class="sale-offer-tag"><span>35%<br>
              off</span></div>
            <div class="timing-wrapper">
              <div class="box-wrapper">
                <div class="date box"> <span class="key">120</span> <span class="value">Days</span> </div>
              </div>
              <div class="box-wrapper">
                <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
              </div>
              <div class="box-wrapper">
                <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
              </div>
              <div class="box-wrapper hidden-md">
                <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
              </div>
            </div>
          </div>
          <!-- /.hot-deal-wrapper -->

          <div class="product-info text-left m-t-20">
            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
            <div class="rating rateit-small"></div>
            <div class="product-price"> <span class="price"> $600.00 </span> <span class="price-before-discount">$800.00</span> </div>
            <!-- /.product-price -->

          </div>
          <!-- /.product-info -->

          <div class="cart clearfix animate-effect">
            <div class="action">
              <div class="add-cart-button btn-group">
                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
              </div>
            </div>
            <!-- /.action -->
          </div>
          <!-- /.cart -->
        </div>
      </div>
    </div>
    <!-- /.sidebar-widget -->
  </div>
  <!-- ============================================== HOT DEALS: END ============================================== -->

  <!-- ============================================== SPECIAL OFFER ============================================== -->

  <div class="sidebar-widget outer-bottom-small wow fadeInUp">
    <h3 class="section-title">Special Offer</h3>
    <div class="sidebar-widget-body outer-top-xs">
      <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
        <div class="item">
          <div class="products special-product">
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p30.jpg" alt=""> </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p29.jpg" alt=""> </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p28.jpg" alt=""> </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
          </div>
        </div>
        <div class="item">
          <div class="products special-product">
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p27.jpg" alt=""> </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p26.jpg" alt=""> </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p25.jpg" alt=""> </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
          </div>
        </div>
        <div class="item">
          <div class="products special-product">
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p24.jpg"  alt=""> </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p23.jpg" alt=""> </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p22.jpg" alt=""> </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.sidebar-widget-body -->
  </div>
  <!-- /.sidebar-widget -->
  <!-- ============================================== SPECIAL OFFER : END ============================================== -->
  <!-- ============================================== SPECIAL DEALS ============================================== -->

  <div class="sidebar-widget outer-bottom-small wow fadeInUp">
    <h3 class="section-title">Special Deals</h3>
    <div class="sidebar-widget-body outer-top-xs">
      <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
        <div class="item">
          <div class="products special-product">
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p28.jpg"  alt=""> </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p15.jpg"  alt=""> </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p26.jpg"  alt="image"> </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
          </div>
        </div>
        <div class="item">
          <div class="products special-product">
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p18.jpg" alt=""> </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p17.jpg" alt=""> </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p16.jpg" alt=""> </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
          </div>
        </div>
        <div class="item">
          <div class="products special-product">
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p15.jpg" alt="images">
                        <div class="zoom-overlay"></div>
                        </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p14.jpg"  alt="">
                        <div class="zoom-overlay"></div>
                        </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{asset('frontend/images')}}/products/p13.jpg" alt="image"> </a> </div>
                      <!-- /.image -->

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.sidebar-widget-body -->
  </div>
  <!-- /.sidebar-widget -->
  <!-- ============================================== SPECIAL DEALS : END ============================================== -->

  <!-- ============================================== Testimonials============================================== -->
  <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
    <div id="advertisement" class="advertisement">
        @foreach ($user as $item)
        <div class="item">
            <div class="avatar"><img src="{{asset('upload/user_images')}}/{{ $item->image }}" alt="Image"></div>
            <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
            <div class="clients_author">{{ $item->name }} <span>{{ $item->email }}</span> </div>
            <!-- /.container-fluid -->
          </div>
          <!-- /.item -->
        @endforeach

    </div>
    <!-- /.owl-carousel -->
  </div>

  <!-- ============================================== Testimonials: END ============================================== -->
</div>
<!-- /.sidemenu-holder -->
<!-- ============================================== SIDEBAR : END ============================================== -->
