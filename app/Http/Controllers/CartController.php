<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){

        dd(session()->get('cart'));

    }
    public function add(Request $request){

        $product = $request->get('product');

        //Verificar se existe sessao para os produtos
        if(session()->has('cart')){
            //Caso exista adicionar produtos na seçao existente
            session()->push('cart', $product);
        } else {
            //Caso nao exista criar sessao com o primeiro produto
            $products[] = $product;

            session()->put('cart', $products);
        }

        flash('Produto adicionado ao Carrinho')->success();

        return redirect()->route('product.single', ['slug' => $product['slug']]);


    }
}
