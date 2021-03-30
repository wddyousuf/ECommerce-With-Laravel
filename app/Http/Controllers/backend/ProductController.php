<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Model\Product;
use App\Model\Category;
use App\Model\Brand;
use App\Model\Color;
use App\Model\Size;
use App\Model\ProductColor;
use App\Model\ProductImage;
use App\Model\ProductSize;
use App\Model\ProductReview;
use App\Model\SubCategory;
use App\Model\SubSubCategory;
use Illuminate\Http\Request;
use Auth;
use DB;

class ProductController extends Controller
{
    public function view(){
        $db_data['all_data']=Product::get();
        return view('backend.product.view',$db_data);
    }
    public function add(){
        $data['category']=Category::all();
        $data['subCategory']=SubCategory::all();
        $data['subSubCategory']=SubSubCategory::all();
        $data['brand']=Brand::all();
        $data['size']=Size::all();
        $data['color']=Color::all();
        return view('backend.product.add',$data);
    }
    public function edit($id){
        $editData['product']=Product::find($id);
        $editData['category']=Category::all();
        $editData['subCategory']=SubCategory::all();
        $editData['subSubCategory']=SubSubCategory::all();
        $editData['brand']=Brand::all();
        $editData['size']=Size::all();
        $editData['color']=Color::all();
        $editData['colors_id']=ProductColor::select('color_id')->where('product_id',$editData['product']->id)->get()->toArray();
        $editData['sizes_id']=ProductSize::select('size_id')->where('product_id',$editData['product']->id)->get()->toArray();

        return view('backend.product.add',$editData);
    }
    public function delete(Request $request){
        $data=Product::find($request->id);
        if (file_exists('upload/product/' . $data->image) AND ! empty ($data->image)) {
            unlink('upload/product/'.$data->image);
        }
        $data->delete();
        $subImage=ProductImage::where('product_id',$request->id)->get()->toArray();
        if(!empty($subImage)){
            foreach ($subImage as $value) {
                if(!empty($value)){
                    unlink('upload/product/sub_image/'.$value['sub_image']);
                }
            }
        }
        ProductImage::where('product_id',$request->id)->delete();
        ProductColor::where('product_id',$request->id)->delete();
        ProductSize::where('product_id',$request->id)->delete();
        return redirect()->route('product.view')->with('success','Product Deleted Successfully');
    }
    public function update(ProductRequest $request,$id){
        DB::transaction(function () use($request,$id) {
            $data=Product::find($id);
            $data->cat_id=$request->category;
            $data->subcat_id=$request->subCategory;
            $data->subsubcat_id=$request->subSubCategory;
            $data->brand_id=$request->brand;
            $data->name=$request->name;
            $data->slug=str_slug($request->name);
            $data->price=$request->price;
            $data->discount_price=$request->discount_price;
            $data->description=$request->description;
            $data->long_description=$request->long_description;
            $data->stock=$request->stock;
        if($request->file('image')){
            $file= $request->file('image');
            @unlink(\public_path('upload/product/'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/product'),$filename);
            $data['image']=$filename;
        }
        if ($data->save()) {

            $files= $request->sub_image;
            if(!empty($files)){
                $subImage=ProductImage::where('product_id',$id)->get()->toArray();
                foreach ($subImage as $value) {
                    if(!empty($value)){
                        unlink('upload/product/sub_image/'.$value['sub_image']);
                    }
                }
                ProductImage::where('product_id',$id)->delete();
            }
            if (!empty($files)) {
                foreach($files as $file){

                    $imgName=date('YMDHi').$file->getClientOriginalName();
                    $file->move(public_path('upload/product/sub_image'),$imgName);
                    $subImage['sub_image']=$imgName;
                    $subImage=new ProductImage();
                    $subImage->product_id=$data->id;
                    $subImage->sub_image= $imgName;
                    $subImage->save();
                }
            }

            $colors= $request->color;
            if(!empty($colors)){
                ProductColor::where('product_id',$id)->delete();
            }
            if(!empty($colors)){
                foreach ($colors as  $value) {
                    $mcolor= new ProductColor();
                    $mcolor->product_id=$data->id;
                    $mcolor->color_id=$value;
                    $mcolor->save();
                }
            }
            $sizes= $request->size;
            if(!empty($colors)){
                ProductSize::where('product_id',$id)->delete();
            }
            if(!empty($sizes)){
                foreach ($sizes as  $value) {
                    $mcolor= new ProductSize();
                    $mcolor->product_id=$data->id;
                    $mcolor->size_id=$value;
                    $mcolor->save();
                }
            }
        }else{
            return redirect()->back()->with('error','Sorry!Product Data update failed');
        }
        });
        return redirect()->route('product.view')->with('success', 'Product Updated Successfully ');
    }
    public function store(Request $request){
        DB::transaction(function () use($request) {
            $this->validate($request,[
                'name'=>'unique:products,name'
            ]);
            $data=new Product();
            $data->cat_id=$request->category;
            $data->subcat_id=$request->subCategory;
            $data->subsubcat_id=$request->subSubCategory;
            $data->brand_id=$request->brand;
            $data->name=$request->name;
            $data->slug=str_slug($request->name);
            $data->price=$request->price;
            $data->discount_price=$request->discount_price;
            $data->description=$request->description;
            $data->long_description=$request->long_description;
            $data->stock=$request->stock;
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/product'),$filename);
            $data['image']=$filename;
        }
        if ($data->save()) {
            $files= $request->sub_image;
            if (!empty($files)) {
                foreach($files as $file){
                    $imgName=date('YMDHi').$file->getClientOriginalName();
                    $file->move(public_path('upload/product/sub_image'),$imgName);
                    $subImage['sub_image']=$imgName;
                    $subImage=new ProductImage();
                    $subImage->product_id=$data->id;
                    $subImage->sub_image= $imgName;
                    $subImage->save();
                }
            }
            $colors= $request->color;
            if(!empty($colors)){
                foreach ($colors as  $value) {
                    $mcolor= new ProductColor();
                    $mcolor->product_id=$data->id;
                    $mcolor->color_id=$value;
                    $mcolor->save();
                }
            }
            $sizes= $request->size;
            if(!empty($sizes)){
                foreach ($sizes as  $value) {
                    $mcolor= new ProductSize();
                    $mcolor->product_id=$data->id;
                    $mcolor->size_id=$value;
                    $mcolor->save();
                }
            }
        }else{
            return redirect()->back()->with('error','Sorry!Product Data store failed');
        }
        });

        return redirect()->route('product.view')->with('success', 'Product Inserted Successfully');
    }
    public function details($id){
        $data['product']=Product::find($id);
        return view('backend.product.details',$data);
    }
}
