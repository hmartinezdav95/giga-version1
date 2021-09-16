<?php

use Illuminate\Support\Facades\Route;

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

    Route::get('/', function () {
        return view('seller.welcome');
    });



    Route::get('/registration', function () {
        return view('seller.seller_registration');
    });


    /////customer sign-in
    Route::get('/sign-in-customer', function(){
        return view('customer.sign-in-customer');
    });

    //customer sign-in checkout
///
    Route::get('/sign-in-customer-checkout', function(){
        return view('customer.sign-in-customer-checkout');
    });


    //SignIn and SignUp
    Route::get('/signin-signup', function(){
        return view('customer.signin-signup');
    });