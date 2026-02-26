@extends('layouts.app')
@section("title", $viewData["title"])
@section("subtitle", $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
    <h1>Available products</h1>
    <ul>
      @foreach($viewData["products"] as $key => $product)
        <li>
          Id: {{ $key }} - 
          Name: {{ $product["name"] }} -
          Price: {{ $product["price"] }} -
          <a href="{{ route('cart.add', ['id'=> $key]) }}">
            <button class="btn btn-outline-primary mb-2">Add to cart</button>
          </a>
        </li>
      @endforeach
    </ul>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-12">
    <h1>Products in cart</h1>
    @if (count($viewData["cartProducts"]) > 0)
    <ul>
        @foreach($viewData["cartProducts"] as $key => $product)
          <li>
            Id: {{ $key }} - 
            Name: {{ $product["name"] }} -
            Price: {{ $product["price"] }} - 
            <a href="{{ route('cart.remove', ['id'=>$key]) }}">
                <button class="btn btn-outline-danger mb-2">Remove from cart</button>
            </a>
          </li>
        @endforeach
      </ul>
      <a href="{{ route('cart.removeAll') }}">
        <button class="btn btn-warning mb-2">Remove all products from cart</button>
      </a>
    @else
      <h5 class="mx-4 text-secondary">No products in cart</h5>
    @endif
    </div>
  </div>
</div>
@endsection