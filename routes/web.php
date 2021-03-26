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
Route::get('/contacts', 'FrontendController@contact')->name('contact');
Route::post('/contacts/store', 'FrontendController@store')->name('client.message');
Route::get('/shopping/cart', 'FrontendController@cart')->name('shopping.cart');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'auth'],function(){
    Route::prefix('/user')->group(function(){
        Route::get('/view','backend\UserController@userView')->name('user.view');
        Route::get('/add','backend\UserController@userAdd')->name('user.add');
        Route::post('/store','backend\UserController@userStore')->name('user.store');
        Route::get('/edit/{id}','backend\UserController@userEdit')->name('user.edit');
        Route::post('/update/{id}','backend\UserController@userUpdate')->name('user.update');
        Route::post('/delete','backend\UserController@userDelete')->name('user.delete');
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
        Route::post('/delete','backend\ProductController@delete')->name('product.delete');
    });

});
