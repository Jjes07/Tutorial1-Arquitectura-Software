@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
<div class="container">
  <div class="row justify-content-center">
        <div class="col-lg-4">
            
            <div class="d-flex justify-content-between">
                <p class="lead">Developed by:</p>
                <p class="lead">{{ $author }}</p>
            </div>

            <div class="d-flex justify-content-between">
                <p class="lead">Email address:</p>
                <p class="lead">{{ $email }}</p>
            </div>

            <div class="d-flex justify-content-between">
                <p class="lead">Phone Number:</p>
                <p class="lead">{{ $phone }}</p>
            </div>

        </div>
    </div>
</div>
@endsection