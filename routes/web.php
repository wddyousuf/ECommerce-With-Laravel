<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\FrontController;

Route::get('/', 'FrontendController@index')->name('hmpg');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/detail/{slug}', 'FrontendController@detail')->name('product.detail');
Route::get('/products/category-wise/{id}', 'FrontendController@catwise')->name('product.catwise');
Route::get('/contacts', 'FrontendController@contact')->name('contact');
Route::post('/contacts/store', 'FrontendController@store')->name('client.message');
//Cart Controller
Route::post('/product/cart','CartController@addToCart')->name('product.cart');
Route::get('/shopping/cart', 'CartController@cart')->name('shopping.cart');
Route::post('/shopping/cartupdate', 'CartController@cartUpdate')->name('cart.update');
Route::get('/shopping/cartdelete/{rowId}', 'CartController@cartDelete')->name('cart.delete');
//Customer Controller
Route::get('/customerLogin','CustomerController@login')->name('cstmr.login');
Route::get('/customerVerify','CustomerController@verify')->name('cstmr.verify');
Route::post('/customerVerify','CustomerController@verifyuser')->name('cstmr.verifyuser');
Route::post('/customerSignup','CustomerController@signup')->name('cstmr.signup');
Route::post('/customerSignupStore','CustomerController@signupstore')->name('cstmr.signupstore');





Auth::routes();

Route::group(['middleware'=>['auth','customer']],function(){
    Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');
    Route::get('/editProdile','DashboardController@edit')->name('edit.profile');
    Route::post('/editProdile/{id}','DashboardController@store')->name('store.profile');
    Route::get('/ResetPassword','DashboardController@resetrequest')->name('resetget.profile');
    Route::post('/ResetPassword','DashboardController@reset')->name('reset.profile');


    Route::get('/checkout','CheckoutController@checkout')->name('checkout');
    Route::post('/checkout','CheckoutController@checkoutbill')->name('checkoutbill');
    Route::get('/payment','CheckoutController@payment')->name('payment');
    Route::post('/payment','CheckoutController@paymentstore')->name('paymentstore');
    Route::get('/orders','CustomerController@orders')->name('orders');
});


Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::prefix('/user')->group(function(){
        Route::get('/view','backend\UserController@userView')->name('user.view');
        Route::get('/add','backend\UserController@userAdd')->name('user.add');
        Route::post('/store','backend\UserController@userStore')->name('user.store');
        Route::get('/edit/{id}','backend\UserController@userEdit')->name('user.edit');
        Route::post('/update/{id}','backend\UserController@userUpdate')->name('user.update');
        Route::post('/delete','backend\UserController@userDelete')->name('user.delete');
        Route::get('/viewUnverified','backend\UserController@userUnverified')->name('user.unverified');
    });
    Route::prefix('/profiles')->group(function(){
        Route::get('/view','backend\ProfileController@profilesView')->name('profiles.view');
        Route::get('/edit','backend\ProfileController@profilesEdit')->name('profiles.edit');
        Route::post('/update','backend\ProfileController@profilesUpdate')->name('profiles.update');
        Route::get('/password','backend\ProfileController@password')->name('password.change');
        Route::post('/password/reset','backend\ProfileController@passwordReset')->name('password.reset');
    });
    Route::prefix('/logos')->group(function(){
        Route::get('/view','backend\LogoController@view')->name('logo.view');
        Route::get('/add','backend\LogoController@add')->name('logo.add');
        Route::post('/store','backend\LogoController@store')->name('logo.store');
        Route::get('/edit/{id}','backend\LogoController@edit')->name('logo.edit');
        Route::post('/update/{id}','backend\LogoController@update')->name('logo.update');
        Route::post('/delete','backend\LogoController@delete')->name('logo.delete');
    });
    Route::prefix('/slider')->group(function(){
        Route::get('/view','backend\SliderController@view')->name('slider.view');
        Route::get('/add','backend\SliderController@add')->name('slider.add');
        Route::post('/store','backend\SliderController@store')->name('slider.store');
        Route::get('/edit/{id}','backend\SliderController@edit')->name('slider.edit');
        Route::post('/update/{id}','backend\SliderController@update')->name('slider.update');
        Route::post('/delete','backend\SliderController@delete')->name('slider.delete');
    });

    Route::prefix('/contact')->group(function(){
        Route::get('/view','backend\ContactController@view')->name('contact.view');
        Route::get('/add','backend\ContactController@add')->name('contact.add');
        Route::post('/store','backend\ContactController@store')->name('contact.store');
        Route::get('/edit/{id}','backend\ContactController@edit')->name('contact.edit');
        Route::post('/update/{id}','backend\ContactController@update')->name('contact.update');
        Route::post('/delete','backend\ContactController@delete')->name('contact.delete');
        Route::get('/communicate','backend\ContactController@communicate')->name('contact.communicate');
        Route::post('/communicate/delete','backend\ContactController@commdelete')->name('communicate.delete');
    });
    Route::prefix('/about')->group(function(){
        Route::get('/view','backend\AboutController@view')->name('about.view');
        Route::get('/add','backend\AboutController@add')->name('about.add');
        Route::post('/store','backend\AboutController@store')->name('about.store');
        Route::get('/edit/{id}','backend\AboutController@edit')->name('about.edit');
        Route::post('/update/{id}','backend\AboutController@update')->name('about.update');
        Route::post('/delete','backend\AboutController@delete')->name('about.delete');
    });
    Route::prefix('/category')->group(function(){
        Route::get('/view','backend\CategoryController@view')->name('category.view');
        Route::get('/add','backend\CategoryController@add')->name('category.add');
        Route::post('/store','backend\CategoryController@store')->name('category.store');
        Route::get('/edit/{id}','backend\CategoryController@edit')->name('category.edit');
        Route::post('/update/{id}','backend\CategoryController@update')->name('category.update');
        Route::post('/delete','backend\CategoryController@delete')->name('category.delete');
    });
    Route::prefix('/subcategory')->group(function(){
        Route::get('/view','backend\SubCategoryController@view')->name('subCategory.view');
        Route::get('/add','backend\SubCategoryController@add')->name('subCategory.add');
        Route::post('/store','backend\SubCategoryController@store')->name('subCategory.store');
        Route::get('/edit/{id}','backend\SubCategoryController@edit')->name('subCategory.edit');
        Route::post('/update/{id}','backend\SubCategoryController@update')->name('subCategory.update');
        Route::post('/delete','backend\SubCategoryController@delete')->name('subCategory.delete');
    });
    Route::prefix('/subsubcategory')->group(function(){
        Route::get('/view','backend\SubSubCategoryController@view')->name('subSubCategory.view');
        Route::get('/add','backend\SubSubCategoryController@add')->name('subSubCategory.add');
        Route::post('/store','backend\SubSubCategoryController@store')->name('subSubCategory.store');
        Route::get('/edit/{id}','backend\SubSubCategoryController@edit')->name('subSubCategory.edit');
        Route::post('/update/{id}','backend\SubSubCategoryController@update')->name('subSubCategory.update');
        Route::post('/delete','backend\SubSubCategoryController@delete')->name('subSubCategory.delete');
    });
    Route::prefix('/brand')->group(function(){
        Route::get('/view','backend\BrandController@view')->name('brand.view');
        Route::get('/add','backend\BrandController@add')->name('brand.add');
        Route::post('/store','backend\BrandController@store')->name('brand.store');
        Route::get('/edit/{id}','backend\BrandController@edit')->name('brand.edit');
        Route::post('/update/{id}','backend\BrandController@update')->name('brand.update');
        Route::post('/delete','backend\BrandController@delete')->name('brand.delete');
    });
    Route::prefix('/color')->group(function(){
        Route::get('/view','backend\ColorController@view')->name('color.view');
        Route::get('/add','backend\ColorController@add')->name('color.add');
        Route::post('/store','backend\ColorController@store')->name('color.store');
        Route::get('/edit/{id}','backend\ColorController@edit')->name('color.edit');
        Route::post('/update/{id}','backend\ColorController@update')->name('color.update');
        Route::post('/delete','backend\ColorController@delete')->name('color.delete');
    });
    Route::prefix('/size')->group(function(){
        Route::get('/view','backend\SizeController@view')->name('size.view');
        Route::get('/add','backend\SizeController@add')->name('size.add');
        Route::post('/store','backend\SizeController@store')->name('size.store');
        Route::get('/edit/{id}','backend\SizeController@edit')->name('size.edit');
        Route::post('/update/{id}','backend\SizeController@update')->name('size.update');
        Route::post('/delete','backend\SizeController@delete')->name('size.delete');
    });
    Route::prefix('/product')->group(function(){
        Route::get('/view','backend\ProductController@view')->name('product.view');
        Route::get('/add','backend\ProductController@add')->name('product.add');
        Route::post('/store','backend\ProductController@store')->name('product.store');
        Route::get('/edit/{id}','backend\ProductController@edit')->name('product.edit');
        Route::post('/update/{id}','backend\ProductController@update')->name('product.update');
        Route::get('/details/{id}','backend\ProductController@details')->name('product.datails');
        Route::post('/delete','backend\ProductController@delete')->name('product.delete');
    });
    Route::prefix('/order')->group(function(){
        Route::get('/viewpending','backend\OrderController@viewpending')->name('pending');
        Route::get('/viewapproved','backend\OrderController@viewapproved')->name('approved');
        Route::get('/add','backend\ProductController@add')->name('product.add');
        Route::post('/store','backend\ProductController@store')->name('product.store');
        Route::get('/edit/{id}','backend\ProductController@edit')->name('product.edit');
        Route::post('/update/{id}','backend\ProductController@update')->name('product.update');
        Route::get('/details/{id}','backend\ProductController@details')->name('product.datails');
        Route::get('/approve/{id}','backend\OrderController@approve')->name('approve');
        Route::post('/cancel/{id}','backend\OrderController@cancel')->name('cancel');
    });

});
