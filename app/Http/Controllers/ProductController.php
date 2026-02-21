<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData['products'] = Product::all();

        return view('product.index')->with('viewData', $viewData);
    }

    public function show(string $id): View|\Illuminate\Http\RedirectResponse
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData['title'] = $product->getName().' - Online Store';
        $viewData['subtitle'] = $product->getName().' - Product information';
        $viewData['product'] = $product;
        $viewData['price'] = '$'.$product->getPrice().' USD';

        return view('product.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = []; // to be sent to the view
        $viewData['title'] = 'Create product';

        return view('product.create')->with('viewData', $viewData);
    }

    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|gt:0',
        ]);

        Product::create($request->only(['name', 'price']));

        return back();

    }
}
