@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">
                @if (isset($product))
                      Edit Product
                      @else
                      Add Product
                      @endif
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">
                @if (isset($product))
                Edit Size
                @else
                Add Size
                @endif
            </li>
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
                      @if (isset($product))
                      <i class="fa fa-edit mr-1 text-info"></i>
                      Edit Product
                      @else
                      <i class="fa fa-plus-circle mr-1 text-info"></i>
                      Add Product
                      @endif
                    <a href="{{ route('product.view') }}" class="btn btn-info float-right "><i class="fa fa-list fa-xs ml-1 mr-1"></i>Manage Products</a>
                  </h3>
                  <div class="col-md-4">
                      @error('name')
                      <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>{{ $message }}</strong>
                        </div>
                      @enderror
                    </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ (@$product)?route('product.update',$product->id):route('product.store') }}" enctype="multipart/form-data" method="post" id="myForm" name="addproduct">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="category">Category</label>
                                <select name="category" id="category" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($category as $item)
                                    <option value="{{ $item->id }}" {{(@$product->cat_id==$item->id)?'selected':''}}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="subCategory">SubCategory</label>
                                <select name="subCategory" id="subCategory" class="form-control">
                                    <option value="">Select SubCategory</option>
                                    @foreach ($subCategory as $item)
                                    <option value="{{ $item->id }}" {{(@$product->subcat_id==$item->id)?'selected':''}}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="brand">Brand</label>
                                <select name="brand" id="brand" class="form-control">
                                    <option value="">Select Brand</option>
                                    @foreach ($brand as $item)
                                    <option value="{{ $item->id }}" {{(@$product->brand_id==$item->id)?'selected':''}}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="name">Product Name</label>
                                <input type="text" id="name" value="{{ @$product->name }}" class="form-control" name="name">
                              </div>
                            <div class="form-group col-md-4">
                                <label for="size">Size</label>
                                <select name="size[]" id="size" class="form-control select2" multiple>
                                    @foreach ($size as $item)
                                    <option value="{{ $item->id }}" {{(@in_array(['size_id'=>$item->id],$sizes_id))?'selected':''}}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="color">Color</label>
                                <select name="color[]" id="color" class="form-control select2" multiple>
                                    @foreach ($color as $item)
                                    <option value="{{ $item->id }}" {{(@in_array(['color_id'=>$item->id],$colors_id))?'selected':''}}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="price">Price</label>
                                <input type="number" id="price" value="{{ @$product->price }}" class="form-control" name="price" step="0.01">
                              </div>
                            <div class="form-group col-md-4">
                                <label for="discount_price">Discount Price</label>
                                <input type="number" id="discount_price" value="{{ @$product->discount_price }}" class="form-control" name="discount_price" step="0.01">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="stock">Stock</label>
                                <input type="number" id="stock" value="{{ @$product->stock }}" class="form-control" name="stock">
                              </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="description">Short Description</label>
                                <textarea id="description" class="form-control" name="description" rows="4" cols="15">{{@$product->description}}</textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="long_description">Long Description</label>
                                <textarea id="long_description"  class="form-control" name="long_description" rows="4" cols="15">{{@$product->long_description}}</textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="subSubCategory">Product SubSubCategory</label>
                                <select name="subSubCategory" id="subSubCategory" class="form-control">
                                    @foreach ($subSubCategory as $item)
                                    <option value="{{ $item->id }}" {{(@$product->subsubcat_id==$item->id)?'selected':''}}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <img src="{{ (!empty(@$product->image))? url('upload/product/'.@$product->image): url('upload/noImage.jpg')}}" id="showImage" style="height: 150px; width: 150px; border: 1px solid black;" alt="">
                            </div>
                          <div class="form-group col-md-4">
                            <label for="image">Image</label>
                            <input type="file" id="image" class="form-control" name="image">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="sub_image">Image</label>
                            <input type="file" id="sub_image" class="form-control" name="sub_image[]" multiple>
                          </div>
                        </div>
                        <div>
                            <input type="submit" value="{{ (@$product)?'Update Product':'Add Product' }}" class="btn btn-success">
                        </div>
                    </form>
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


