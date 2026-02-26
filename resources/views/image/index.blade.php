@extends('layouts.app')

@section("title", "Image Storage - DI")
@section('subtitle', 'Image Upload with Dependency Injection')

@section('content')
<div class="container py-5">

  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8">

      <div class="card shadow-lg border-0 rounded-4">

        <div class="card-header bg-secondary text-white fw-semibold">
          Upload Image
        </div>

        <div class="card-body p-4">

          <form action="{{ route('image.save') }}"
                method="post"
                enctype="multipart/form-data"
                class="d-flex flex-column gap-3">

            @csrf

            <div>
              <label class="form-label fw-semibold">Select an image</label>
              <input type="file"
                     name="profile_image"
                     class="form-control"
                     required>
            </div>

            <button type="submit"
                    class="btn btn-primary w-100 fw-semibold">
              Upload Image
            </button>

          </form>

          <hr class="my-4">

          <div class="text-center">
            <img src="{{ URL::asset('storage/test.png') }}"
                 class="img-fluid rounded-4 shadow-sm mt-3"
                 style="max-height: 300px; object-fit: cover;"
                 alt="Uploaded Image Preview">
          </div>

        </div>

      </div>

    </div>
  </div>

</div>
@endsection