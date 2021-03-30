@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Product Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Product Details</li>
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
                    Product Details
                    <a href="{{ route('product.view') }}" class="btn btn-info float-right "><i class="fa fa-list ml-1 mr-1"></i>All Products</a>

                    </h3>

                </div><!-- /.card-header -->
                <div class="card-body col-md-8 m-auto text-center">

                    <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <td width="50%">Category</td>
                            <td width="50%">{{ $product['category']['name']}}</td>
                        </tr>
                        <tr>
                            <td width="50%">SubCategory</td>
                            <td width="50%">{{ $product['subCategory']['name']}}</td>
                        </tr>
                        <tr>
                            <td width="50%">SubSubCategory</td>
                            <td width="50%">{{ $product['subSubCategory']['name']}}</td>
                        </tr>
                        <tr>
                            <td width="50%">Brand</td>
                            <td width="50%">{{ $product['brand']['name']}}</td>
                        </tr>
                        <tr>
                            <td width="50%">Product Name</td>
                            <td width="50%">{{ $product->name }}</td>
                        </tr>
                        <tr>
                            <td width="50%">Price</td>
                            <td width="50%">{{ $product->price }}</td>
                        </tr>
                        <tr>
                            <td width="50%">Discount Price</td>
                            <td width="50%">{{ $product->discount_price }}</td>
                        </tr>
                        <tr>
                            <td width="50%">Stock</td>
                            <td width="50%">{{ $product->stock }}</td>
                        </tr>
                        <tr>
                            <td width="50%">Description</td>
                            <td width="50%">{{ $product->description }}</td>
                        </tr>
                        <tr>
                            <td width="50%">Long Description</td>
                            <td width="50%">{{ $product->long_description }}</td>
                        </tr>
                        <tr>
                            <td width="50%">Available Colors</td>
                            <td width="50%">
                                @php
                                    $colors=App\Model\ProductColor::where('product_id',$product->id)->get();
                                @endphp
                                @foreach ($colors as $item)
                                    {{ $item['color']['name']     }}
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td width="50%">Available Sizes</td>
                            <td width="50%">
                                @php
                                    $sizes=App\Model\ProductSize::where('product_id',$product->id)->get();
                                @endphp
                                @foreach ($sizes as $item)
                                    {{ $item['size']['name']     }}
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td width="50%">Image</td>
                            <td width="50%"><img src="{{ (!empty($product->image))? url('upload/product/'.$product->image): url('upload/noImage.jpg')}}"
                                alt="{{ $product->name }}" style="height: 100px; width:100px;"></td>
                        </tr>
                        <tr>
                            <td width="50%">Product Sub Images</td>
                            <td width="50%">
                                @php
                                    $subImage=App\Model\ProductImage::where('product_id',$product->id)->get();
                                @endphp
                                @foreach ($subImage as $item)
                                <img src="{{ (!empty($item->sub_image))? url('upload/product/sub_image/'.$item->sub_image): url('upload/noImage.jpg')}}"
                                alt="{{ $product->name }}" style="height: 100px; width:100px;">
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="{{ route('product.edit',$product->id) }}"class="btn btn-primary col-md-12"><i class="fa fa-edit"></i> Edit Product</a></td>
                        </tr>
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
