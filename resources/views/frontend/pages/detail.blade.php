@extends('frontend.layouts.master')
@section('content')

<div class='row single-product'>
@include('frontend.layouts.sidebar')

<div class="col-md-9">
    <div class="detail-block">
        <div class="row  wow fadeInUp">

            <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                <div class="product-item-holder size-big single-product-gallery small-gallery">

                    <div id="owl-single-product">
                        <div class="single-product-gallery-item" id="slide1">
                            <a data-lightbox="image-1" data-title="Gallery" href="{{ asset('upload/product') }}/{{ $product->image }}">
                                <img class="img-responsive" alt="" src="{{ asset('upload/product') }}/{{ $product->image }}" data-echo="{{ asset('upload/product') }}/{{ $product->image }}"/>
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                    </div><!-- /.single-product-slider -->


                    <div class="single-product-gallery-thumbs gallery-thumbs">

                        <div id="owl-single-product-thumbnails">
                            @php
                                $images=App\Model\ProductImage::where('product_id',$product->id)->paginate(6);
                            @endphp
                            @foreach ($images as $item)
                            <div class="item">
                                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                    <img class="img-responsive" width="85" alt="" src="{{ asset('upload/product/sub_image') }}/{{ $item->sub_image }}" data-echo="{{ asset('upload/product/sub_image') }}/{{ $item->sub_image }}"/>
                                </a>
                            </div>
                            @endforeach
                        </div><!-- /#owl-single-product-thumbnails -->


                    </div><!-- /.gallery-thumbs -->

                </div><!-- /.single-product-gallery -->
            </div><!-- /.gallery-holder -->
            <div class='col-sm-6 col-md-7 product-info-block'>
                <div class="product-info">
                    <h1 class="name">{{ $product->name }}</h1>

                    <div class="rating-reviews m-t-20">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="rating rateit-small"></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="reviews">
                                    <a href="#" class="lnk">(13 Reviews)</a>
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.rating-reviews -->

                    <div class="stock-container info-container m-t-10">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="stock-box">
                                    <span class="label" style="color:#666666;">Availability :</span>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="stock-box">
                                    <span class="value">In Stock ({{ $product->stock }})</span>
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.stock-container -->
                    <div class="row">
                        <div class="col-sm-3">
                                <span class="value" style="color:#666666;">Brand Name :</span>
                        </div>
                        <div class="col-sm-9">
                                <span class="value">{{ $product['brand']['name'] }}</span>
                        </div>
                    </div>

                    <div class="description-container m-t-20">
                        {{ $product->description }}
                    </div><!-- /.description-container -->

                    <div class="price-container info-container m-t-20">
                        <div class="row">


                            <div class="col-sm-6">
                                @if (!empty($product->discount_price))
                                <div class="price-box">
                                    <span class="price">৳ {{ $product->discount_price }}</span>
                                    <span class="price-strike">৳ {{ $product->price }}</span>
                                </div>
                                @else
                                <div class="price-box">
                                    <span class="price">৳ {{ $product->price }}</span>
                                </div>
                                @endif

                            </div>

                            <div class="col-sm-6">
                                <div class="favorite-button m-t-10">
                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
                                        <i class="fa fa-signal"></i>
                                    </a>
                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </div>
                            </div>

                        </div><!-- /.row -->
                        @php
                            $size=App\Model\ProductSize::where('product_id',$product->id)->get();
                            $color=App\Model\ProductColor::where('product_id',$product->id)->get();
                        @endphp
                    </div><!-- /.price-container -->
                    <form action="{{ route('product.cart') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                        @if(!empty($product->discount_price))
                        <input type="hidden" value="{{ $product->discount_price }}" id="price" name="price">
                        @else
                        <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                        @endif
                        <div class="quantity-container info-container">
                            <div>
                                @error('color')
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                @error('size')
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label for="size">Size</label>
                                    <select name="size" id="size" class="form-control select2">
                                        <option value="">Select Size</option>
                                        @foreach ($size as $item)
                                        <option value="{{ $item['size']['id'] }}">{{ $item['size']['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="color">Color</label>
                                    <select name="color" id="color" class="form-control select2">
                                        <option value="">Select Color</option>
                                        @foreach ($color as $item)
                                        <option value="{{ $item['color']['id'] }}">{{ $item['color']['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div><!-- /.row -->
                        </div><!-- /.SIZE and Color-container -->
                        <div class="quantity-container info-container">
                            <div class="row">

                                <div class="col-sm-2">
                                    <span class="label">Qty :</span>
                                </div>

                                <div class="col-sm-2">
                                    <div class="cart-quantity">
                                        <div class="quantity">
                                            <input type="number" class="form-control" min="1" max="20" value="1" name="qty" id="qty">
                                          </div>
                                    </div>
                                </div>

                                <div class="col-sm-7">
                                    <button  type="submit" class="btn btn-primary" name="submit" id="submit"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</button>
                                </div>


                            </div><!-- /.row -->
                        </div><!-- /.quantity-container -->
                    </form>


                </div><!-- /.product-info -->
            </div><!-- /.col-sm-7 -->
        </div><!-- /.row -->
    </div>

    <div class="product-tabs inner-bottom-xs  wow fadeInUp">
        <div class="row">
            <div class="col-sm-3">
                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                    <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                    <li><a data-toggle="tab" href="#review">REVIEW</a></li>
                    <li><a data-toggle="tab" href="#tags">TAGS</a></li>
                </ul><!-- /.nav-tabs #product-tabs -->
            </div>
            <div class="col-sm-9">

                <div class="tab-content">

                    <div id="description" class="tab-pane in active">
                        <div class="product-tab">
                            <p class="text">{{ $product->long_description }}</p>
                        </div>
                    </div><!-- /.tab-pane -->

                    <div id="review" class="tab-pane">
                        <div class="product-tab">

                            <div class="product-reviews">
                                <h4 class="title">Customer Reviews</h4>

                                <div class="reviews">
                                    <div class="review">
                                        <div class="review-title"><span class="summary">We love this product</span><span class="date"><i class="fa fa-calendar"></i><span>1 days ago</span></span></div>
                                        <div class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit."</div>
                                    </div>

                                </div><!-- /.reviews -->
                            </div><!-- /.product-reviews -->


                            <div class="product-add-review">
                                <h4 class="title">Write your own review</h4>
                                <div class="review-table">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="cell-label">&nbsp;</th>
                                                    <th>1 star</th>
                                                    <th>2 stars</th>
                                                    <th>3 stars</th>
                                                    <th>4 stars</th>
                                                    <th>5 stars</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="cell-label">Quality</td>
                                                    <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td class="cell-label">Price</td>
                                                    <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td class="cell-label">Value</td>
                                                    <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                </tr>
                                            </tbody>
                                        </table><!-- /.table .table-bordered -->
                                    </div><!-- /.table-responsive -->
                                </div><!-- /.review-table -->

                                <div class="review-form">
                                    <div class="form-container">
                                        <form role="form" class="cnt-form">

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputName">Your Name <span class="astk">*</span></label>
                                                        <input type="text" class="form-control txt" id="exampleInputName" placeholder="">
                                                    </div><!-- /.form-group -->
                                                    <div class="form-group">
                                                        <label for="exampleInputSummary">Summary <span class="astk">*</span></label>
                                                        <input type="text" class="form-control txt" id="exampleInputSummary" placeholder="">
                                                    </div><!-- /.form-group -->
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputReview">Review <span class="astk">*</span></label>
                                                        <textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
                                                    </div><!-- /.form-group -->
                                                </div>
                                            </div><!-- /.row -->

                                            <div class="action text-right">
                                                <button class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
                                            </div><!-- /.action -->

                                        </form><!-- /.cnt-form -->
                                    </div><!-- /.form-container -->
                                </div><!-- /.review-form -->

                            </div><!-- /.product-add-review -->

                        </div><!-- /.product-tab -->
                    </div><!-- /.tab-pane -->

                    <div id="tags" class="tab-pane">
                        <div class="product-tag">

                            <h4 class="title">Product Tags</h4>
                            <form role="form" class="form-inline form-cnt">
                                <div class="form-container">

                                    <div class="form-group">
                                        <label for="exampleInputTag">Add Your Tags: </label>
                                        <input type="email" id="exampleInputTag" class="form-control txt">


                                    </div>

                                    <button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
                                </div><!-- /.form-container -->
                            </form><!-- /.form-cnt -->

                            <form role="form" class="form-inline form-cnt">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <span class="text col-md-offset-3">Try spaces to separate tags. try single quotes  for phrases.</span>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
                    <section class="section featured-product wow fadeInUp">
                        <h3 class="section-title">upsell products</h3>
                        <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">

                            @foreach ($products as $item)
                            <div class="item item-carousel">
                                <div class="products">

                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="{{ route('product.detail',$item->slug) }}"><img src="{{ asset('upload/product') }}/{{ $item->image }}" alt=""></a>
                                            </div><!-- /.image -->

                                            <div class="tag sale"><span>sale</span></div>
                                        </div><!-- /.product-image -->


                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="{{ route('product.detail',$item->slug) }}">{{ $item->name }}</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>

                                            <div class="product-price">
				                                <span class="price">	{{ $item->price }}	</span>
                                                <span class="price-before-discount">{{ $item->discount_price }}</span>

                                            </div>

                                        </div>
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="lnk">
                                                        <a href="{{ route('product.detail',$item->slug) }}" data-toggle="tooltip" class="add-to-cart" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                                    </li>

                                                    <li class="lnk wishlist">
                                                        <a class="add-to-cart" href="{{ route('product.detail',$item->slug) }}" title="Wishlist">
                                                            <i class="icon fa fa-heart"></i>
                                                        </a>
                                                    </li>

                                                    <li class="lnk">
                                                        <a class="add-to-cart" href="{{ route('product.detail',$item->slug) }}" title="Compare">
                                                            <i class="fa fa-signal"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!-- /.action -->
                                        </div><!-- /.cart -->
                                    </div><!-- /.product -->

                                </div><!-- /.products -->
                            </div><!-- /.item -->
                            @endforeach



                        </div>
                    </section>
</div>
<div class="clearfix"></div>
</div>
@endsection
