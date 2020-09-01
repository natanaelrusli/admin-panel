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
    return view('app', ['components' => 'displayProducts'], ['title' => 'Products']);
});

Route::get('/orders', function () {
    return view('app', ['components' => 'displayOrders'], ['title' => 'Orders']);
});

// Route::get('/users', function () {
//     try {
//         DB::connection()->getPdo();
//         return view('app', ['components' => 'displayUsers'], ['title' => 'Users']);
//     } catch (\Exception $e) {
//         die("Could not connect to the database.  Please check your configuration. error:" . $e );
//     }
// });

Route::get('/users', function () {

    $users = DB::table('users')->get();

    return view('displayUsers', ['title' => 'Products'], ['users' => $users]);
});

Route::get('/products', 'productsController@index');

Route::get('/products/add', 'productsController@create');

Route::post('/products/add', 'productsController@store');

Route::get('products/edit/{id}', 'productsController@edit');

Route::post('products/edit/{id}', 'productsController@update');

Route::post('products/delete/{id}', 'productsController@destroy');

Route::get('/login', function () {
    return view('login', ['title' => 'Login']);
});