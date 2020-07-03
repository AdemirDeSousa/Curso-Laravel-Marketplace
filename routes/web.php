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

    //Como pegar loja de um usuario
    //$user = \App\User::find(4);
    //return $user->store; - Retorna o objeto unico (Store)

    //Como pegar produtos de uma loja
    //$loja = \App\Store::find(1);
    //return $loja->products; - Retorna coleçao (Products)

    //Como pegar lojas de uma categoria
    //$categoria = \App\Category::find(1);
    //$categoria->products;

    //Criar uma loja para um usuario
    //$user = \App\User::find(10);
    //$store = $user->store()->create([
    //    'name' => 'Loja Teste',
    //    'description' => 'Loja Teste de produtos de informatica',
    //    'mobile_phone' => '000000000',
    //    'phone' => '0000000',
    //    'slug' => 'loja-teste'
    //]);

    //dd($store);

    //Criar um produto para uma loja
    //$store =\App\Store::find(41);
    //$products = $store->products()->create([
    //    'name' => 'Notebook Dell',
    //    'description' => 'Core i5 8gb ram',
    //    'body' => 'iau',
    //    'price' => 2999.90,
    //    'slug' => 'notebook-dell'
    //]);

    //dd($products);

    //Criar duas categoria
    //\App\Category::create([
    //    'name' => 'Games',
    //    'description' => 'Eletronic Games',
    //    'slug' => 'games'
    //]);

    //\App\Category::create([
    //    'name' => 'Notebooks',
    //    'description' => 'Notebooks',
    //    'slug' => 'notebooks'
    //]);

    //return \App\Category::all();

    //Adicionar um produto para uma categoria ou vice versa
    //$products = \App\Product::find(48);
    //dd($products->categories()->sync([2]));  //attach: adicionar, detach: remover
    return \App\User::all();

});


Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){

    Route::prefix('/stores')->name('stores.')->group(function(){

        Route::get('/', 'StoreController@index')->name('index'); //Exibir Todas as Lojas
        Route::get('/create', 'StoreController@create')->name('create'); //Formulario de Criar uma Loja
        Route::post('/store', 'StoreController@store')->name('store'); //Salvar Loja
        Route::get('/{store}/edit', 'StoreController@edit')->name('edit'); //Formulario de Editando uma Loja
        Route::post('/update/{store}', 'StoreController@update')->name('update'); //Atualizando Loja
        Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy'); //Deletando Loja

    });

});

