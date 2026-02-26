<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
  <title>@yield('title', 'Online Store')</title>
</head>

<body>
  <!-- header -->
  <nav class="navbar navbar-dark bg-secondary py-3">
    <div class="container">
      <a class="navbar-brand fw-bold" href="{{ route('home.index') }}">
        Online Store
      </a>

      <!-- Hamburger button -->
      <button class="navbar-toggler"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#mainMenu"
              aria-controls="mainMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- Offcanvas menu (right side) -->
  <div class="offcanvas offcanvas-end text-bg-dark"
      tabindex="-1"
      id="mainMenu"
      aria-labelledby="mainMenuLabel">

    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="mainMenuLabel">Menu</h5>
      <button type="button"
              class="btn-close btn-close-white"
              data-bs-dismiss="offcanvas">
      </button>
    </div>

    <div class="offcanvas-body">
      <nav class="nav flex-column gap-2">
        <a class="nav-link text-white" href="{{ route('home.index') }}">Home</a>
        <a class="nav-link text-white" href="{{ route('home.about') }}">About</a>
        <a class="nav-link text-white" href="{{ route('home.contact') }}">Contact</a>
        <a class="nav-link text-white" href="{{ route('product.index') }}">Products</a>
        <a class="nav-link text-white" href="{{ route('cart.index') }}">Cart</a>

        <hr class="text-secondary">

        <a class="nav-link text-white" href="{{ route('product.create') }}">Create Products</a>
        <a class="nav-link text-white" href="{{ route('image.index') }}">Image Storage</a>
        <a class="nav-link text-white" href="{{ route('imagenotdi.index') }}">Image Storage (Not DI)</a>
      </nav>
    </div>
  </div>

  <header class="masthead bg-primary text-white text-center py-4">
    <div class="container d-flex align-items-center flex-column">
      <h2>@yield('subtitle', 'A Laravel EAFIT App')</h2>
    </div>
  </header>
  <!-- header -->

  <div class="container my-4">
    @yield('content')
  </div>

  <!-- footer -->
  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>
        Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
          href="https://twitter.com/danielgarax">
          Daniel Correa
        </a>
      </small>
    </div>
  </div>
  <!-- footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
</body>
</html>
