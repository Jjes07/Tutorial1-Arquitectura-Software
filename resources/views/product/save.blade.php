@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
 <p class="text-center">Your product was created and saved successfully!</p>
 <p class="text-center"><a class="btn btn-success" href="{{ route('product.index') }}">Back to products</a></p>
@endsection