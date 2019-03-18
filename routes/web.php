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
/* setting the theme from outside*/

Route::get('/setTheme/{id}', function ($id) {
    return view('settingsTheme')->with('id',$id);
});

/* prefix home*/

Route::prefix('/home')->group(function () {

    /*Customize theme from site-home*/
    Route::get('/customizeTheme/{id}', function ($id) {
        return view('customizeTheme')->with('id',$id);
    });

    /*set theme firstTime*/
    Route::get('/setTheme/{id}', function ($id) {
        return view('settingsTheme')->with('id',$id);
    });

    /*show all products*/
    Route::get('/showAllProducts/{id}', 'productsController@showProducts');

    /*upload image for products*/
    Route::get('/upload_productImages', function () {
        return view('upload_productImages');
    });

    /*search productInfo*/
   Route::get('/searchProductName/{id}', function ($id) {
       return view('searchProductByName')->with('id',$id);
   });

   /*add category*/
    Route::get('/addCategories/{site_id}', function ($site_id) {
        return view('addCategory')->with('id',$site_id);
    });

    /*search customer details*/
    Route::get('/searchCustomerEmail', function () {
        return view('searchCustomerByEmail');
    });

    /*add products get category list*/
    Route::get('/addProducts/{id}','productsController@getProductCategory');

    /*insert product*/
    Route::post('/addProduct/{id}','productsController@insertProduct');

    /*show all customers*/
    Route::get('/showAllCustomers/{id}', 'customersController@showCustomers');

    /*delete products*/
    Route::get('/deleteProduct/{product_id}','productsController@deleteProduct');

    /*update productInfo load data to form*/
    Route::get('/updateProductInfo/{product_id}/{id}','productsController@updateProductsBefore');

    /*update productInfo update to table*/
    Route::post('/updateProductToTable/{product_id}/{id}','productsController@updateProductsAfter');

    /*delete customer*/
    Route::get('/deleteCustomer/{customer_id}','customersController@deleteCustomer');

    /*update customerInfo load data to form by user*/
    Route::get('/updateCustomerInfo/{customer_id}/{site_id}','customersController@updateCustomersBefore');

    /*update customerInfo load data to form by customer*/
    Route::get('/updateCustomer/{customer_id}/{site_id}','customersController@updateCustomersSiteBefore');

    /*update customerInfo update to table by customer*/
    Route::get('/updateToCustomersTable/{customer_id}/{site_id}','customersController@updateCustomersSiteAfter');

    /*update customerInfo update to table by user*/
    Route::get('/updateToCustomerTable/{customer_id}/{site_id}','customersController@updateCustomersAfter');

    /*add new category*/
    Route::get('/addCategory/{site_id}','categoriesController@insertCategory');

    /*show all categories*/
    Route::get('/showCategories/{site_id}', 'categoriesController@showCategories');

    /*delete category*/
   Route::get('/deleteCategory/{category_id}','categoriesController@deleteCategory');

     /*update category info load data to form*/
    Route::get('/updateCategoryInfo/{category_id}/{site_id}','categoriesController@updateCategoryBefore');

    /*update category info update to table*/
    Route::get('/updateCategoryToTable/{category_id}/{site_id}','categoriesController@updateCategoryAfter');

    /*site registration */
    Route::get('/siteRegistration','siteController@siteRegistration');

    /*search product*/
    Route::get('/searchProductName1/{id}', 'productsController@searchProductByName');

    /*search customer*/
    Route::get('/searchCustomerName1/{id}', 'customersController@searchCustomerByEmail');

    /*set theme*/
    Route::post('/settingTheme/{id}', 'themesController@setTheme');

    /*Load site from site home*/
    Route::get('/basicTheme/{id}', 'themesController@getTheme');

    /*add the product to cart*/
    Route::get('/basicTheme/addToCart/{site_id}/{product_id}','cartsController@addToCart');

    /*checkout load customer details*/
    Route::get('/checkout/{customer_id}/{site_id}', 'customersController@showCustomerDetails');

    /*add product to ordertable*/
    Route::get('/basicTheme/AddCheckOut/{site_id}','ordersController@addToOrder');

    /*show all orders*/
    Route::get('/showAllOrders/{id}', 'ordersController@showOrders');

    /*add customers*/
    Route::get('/addCustomers/{id}', function ($id) {
        return view('addCustomers')->with('site_id',$id);
    });

    /*add new customer by user*/
    Route::get('/addCustomer/{id}','customersController@insertCustomer');

    /*update delivery status */
    Route::get('/showAllOrders/updateStatus/{id}/','ordersController@updateStatus');

    /*customer logout*/
    Route::get('/basicTheme/logout/{id}', 'customersController@logout');

    /*show cart from basictheme site cart*/
    Route::get('/basicTheme/cart/{id}', 'cartsController@showCart');

    /*remove item from cart*/
    Route::get('/basicTheme/removeFromCart/{site_id}/{id}', 'cartsController@deleteProductFromCart');

    /*search order details*/
    Route::get('/searchOrder/{id}', 'ordersController@searchOrders');
});

    /*Load site basicTheme*/
    Route::get('/basicTheme/{id}', 'themesController@getTheme');

    /*Load for customer registration from basicTheme*/
    Route::get('/basicTheme/addCustomers/{id}','themesController@getTheme1');

    /*register customer submitInfo*/
    Route::get('/addCustomer/{id}','customersController@insertCustomer');

    /*Login for customers login submit */
    Route::post('/customerLogin/login/{site_id}','customersController@login');

    /*get name of site*/
    Route::get('/home/{id}', 'siteController@getSiteName');


    /* Add new sites from dashboard of user*/
    Route::get('/addNewSite', function () {
        return view('addSiteInformation');
    });

    /*Customer Login*/
    Route::get('/customerLogin/{site_id}','themesController@getTheme2');

    /*list of all sites of user*/
    Route::get('/dashBoard','siteController@showCurrentUserSites');

    /*Upload image of product*/
    Route::post('/uploadImages','mediaController@uploadImage');


    /* Thank You page of customer after checkout*/
    Route::get('/thankyou/{site_id}', function($site_id) {
        return view('thankyou')->with('site_id',$site_id);
    });

    /* register site*/
    Route::get('/siteRegistration','siteController@siteRegistration');


    Auth::routes();