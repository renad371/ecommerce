<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: cornflowerblue;">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
     
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('index')}}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Projects</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3" href="/shopping/cart">
        <i class="fas fa-shopping-cart"></i>
      </a>
      <li class="nav-item dropdown p-3">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">اللغة</a>
        <ul class="dropdown-menu ">
          <li><a class="dropdown-item text-center" href="language/ar">العربية   <img src="\assete/images/saudi.png" class="rounded-circle" width="30" height="30"  alt="">  </a></li>
          <li><a class="dropdown-item text-center" href="language/en">English <img src="\assete/images/photo.png" class="rounded-circle" width="30" height="30"  alt=""> </a></li>
          
        </ul>
      </li>
      <!-- Notifications -->
      <div class="dropdown">
        <a
          data-mdb-dropdown-init
          class="text-reset me-3 dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          aria-expanded="false"
        >
          <i class="fas fa-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger">1</span>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li>
            <a class="dropdown-item" href="#">Some news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Another news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
      </div>
      <!-- Avatar -->
      <div class="dropdown">
        <a
          data-mdb-dropdown-init
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          aria-expanded="false"
        >
          <img
            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
            class="rounded-circle"
            height="25"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item text-white" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item text-white" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item text-white" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
