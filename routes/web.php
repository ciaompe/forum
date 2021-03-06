<?php

use App\User;

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
    $users = User::all();
    
    echo json_encode($users);
});

Route::get('/test', function () {
    $user = new User();
    $user->name = "Manoj Prasanna Elvitigala";
    $user->password = Hash::make('lolmpe123');
    $user->email = 'info@ciaompe.com';
    $user->save();
});