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

/* Welcome page  */
Route::get('/', function () {
    return view('welcome');
});
/* */

Route::get('/setTheme/{id}', function ($id) {
    return view('settingsTheme')->with('id',$id);
});

Route::prefix('/home')->group(function () {
    //Route::get('/addProducts/{id}', function ($id) {

       // return view('addProducts')->with('id',$id);
   // });
    Route::get('/customizeTheme/{id}', function ($id) {
        return view('customizeTheme')->with('id',$id);
    });

    Route::get('/setTheme/{id}', function ($id) {
        return view('settingsTheme')->with('id',$id);
    });
    Route::get('/showAllProducts/{id}', 'productsController@showProducts');


    Route::get('/upload_productImages', function () {
        return view('upload_productImages');
    });
   Route::get('/searchProductName/{id}', function ($id) {
       return view('searchProductByName')->with('id',$id);
   });
    Route::get('/autofill', function () {
        return view('autoFillAddress');
    });
    Route::get('/addCategories/{site_id}', function ($site_id) {
        return view('addCategory')->with('id',$site_id);
    });

    Route::get('/searchCustomerEmail', function () {
        return view('searchCustomerByEmail');
    });
    Route::get('/addProducts/{id}','productsController@getProductCategory');

    Route::post('/addProduct/{id}','productsController@insertProduct');



    Route::get('/showAllCustomers/{id}', 'customersController@showCustomers');

    Route::get('/deleteProduct/{product_id}','productsController@deleteProduct');

    Route::get('/updateProductInfo/{product_id}/{id}','productsController@updateProductsBefore');

    Route::get('/updateProductToTable/{product_id}/{id}','productsController@updateProductsAfter');



    Route::get('/deleteCustomer/{customer_id}','customersController@deleteCustomer');

    Route::get('/updateCustomerInfo/{customer_id}/{site_id}','customersController@updateCustomersBefore');

    Route::get('/updateToCustomerTable/{customer_id}/{site_id}','customersController@updateCustomersAfter');

    Route::get('/addCategory/{site_id}','categoriesController@insertCategory');

    Route::get('/showCategories/{site_id}', 'categoriesController@showCategories');

   Route::get('/deleteCategory/{category_id}','categoriesController@deleteCategory');

    Route::get('/updateCategoryInfo/{category_id}/{site_id}','categoriesController@updateCategoryBefore');

    Route::get('/updateCategoryToTable/{category_id}/{site_id}','categoriesController@updateCategoryAfter');

    Route::get('/siteRegistration','siteController@siteRegistration');

    Route::get('/searchProductName1/{id}', 'productsController@searchProductByName');

    Route::get('/searchCustomerName1/{id}', 'customersController@searchCustomerByEmail');

    Route::post('/settingTheme/{id}', 'themesController@setTheme');

    Route::get('/basicTheme/{id}', 'themesController@getTheme');

    Route::get('/basicTheme/addToCart/{site_id}/{product_id}','cartsController@addToCart');


    Route::get('/checkout/{id}', function($id) {
        return view('checkout')->with('id',$id);
    });

    Route::get('/basicTheme/AddCheckOut/{site_id}','ordersController@addToOrder');

    Route::get('/showAllOrders/{id}', 'ordersController@showOrders');

});
Route::get('/basicTheme/{id}', 'themesController@getTheme');
Route::get('/addCustomers/{id}', function ($id) {
    return view('addCustomers')->with('id',$id);
});
Route::get('/addCustomer/{id}','customersController@insertCustomer');
Route::post('/customerLogin/login/{site_id}','customersController@login');

Route::get('/home/{id}', function($id) {
    return view('home')->with('id',$id);
});

Route::get('/addNewSite', function () {
    return view('addSiteInformation');
});


Route::get('/customerLogin/{site_id}', function($site_id) {
    return view('customerLogin')->with('site_id',$site_id);
});

Route::get('/dashBoard','siteController@showCurrentUserSites');


Route::post('/uploadImages','mediaController@uploadImage');
Auth::routes();

Route::get('/thankyou/{site_id}', function($site_id) {
    return view('thankyou')->with('site_id',$site_id);
});

Route::get('/siteRegistration','siteController@siteRegistration');