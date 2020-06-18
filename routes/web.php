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

    $helloWorld = 'Hello World';

    return view('welcome', ['helloWorld' => $helloWorld]);
});

Route::get('/model', function(){
    //$products = \App\Product::all(); //select * from products

    //Active Record

    //$user = new \App\User();
    //$user->name = 'Usuario Teste';
    //$user->email = 'teste@gmail.com';
    //$user->password = bcrypt('12345678');
    //$user->save();

    //Query
    //return \App\User::all(); - Retorna todos os usuarios
    //return \App\User::find(3); - Retorna usuarios por id
    //return \App\User::where('name', 'Usuario Teste')->get(); - select * from users where name = 'Usuario Teste'
    //return \App\User::paginate(10); - Paginar dados com Laravel

    //Mass Assignment - Atribuição em Massa

    //$user = \App\User::create([
    //    'name' => 'Habel',
    //    'email' => 'habel@gmail.com',
    //    'password' => bcrypt('iau')
    //]);
    
    //Mass Update
    //$user = \App\User::find(42);
    //$user->update([
    //    'name' => 'Habel Atualizado com o Mass Update'
    //]); //Retorna True ou False
    
    return \App\User::all();

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
