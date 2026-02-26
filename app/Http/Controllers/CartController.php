<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CartController extends Controller
{
    public function index(Request $request): View
    {
        $products = Product::all(); //we get all products

        $cartProducts = [];
        $cartProductData = $request->session()->get('cart_product_data'); //we get the products stored in session
        if ($cartProductData) {
            foreach (array_keys($cartProductData) as $key) {
                if (isset($products[$key])) {
                    $cartProducts[$key] = $products[$key];
                }
            }
        }

        $viewData = [];
        $viewData['title'] = 'Cart - Online Store';
        $viewData['subtitle'] = 'Shopping Cart';
        $viewData['products'] = $products;
        $viewData['cartProducts'] = $cartProducts;

        return view('cart.index')->with('viewData', $viewData);
    }

    public function add(string $id, Request $request): RedirectResponse
    {
        $cartProductData = $request->session()->get('cart_product_data');
        $cartProductData[$id] = $id;
        $request->session()->put('cart_product_data', $cartProductData);

        return back();
    }

    public function removeAll(Request $request): RedirectResponse
    {
        $request->session()->forget('cart_product_data');

        return back();
    }

    public function remove(string $id, Request $request): RedirectResponse
    {
        $cartProductData = $request->session()->get('cart_product_data');
        unset($cartProductData[$id]);
        $request->session()->put('cart_product_data', $cartProductData);

        return back();
    }
}
