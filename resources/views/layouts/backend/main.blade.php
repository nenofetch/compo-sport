<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/main/app.css" />
    <link rel="stylesheet" href="assets/css/main/app-dark.css" />
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon"/>
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png"/>

    <link rel="stylesheet" href="assets/css/shared/iconly.css"/>
    <link rel="stylesheet" href="assets/extensions/@fortawesome/fontawesome-free/css/all.min.css"/>
  </head>

  <body>
    <script src="assets/js/initTheme.js"></script>
    <div id="app">

        <!-- Sidebar -->
        @include('layouts.backend.sidebar')

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                  <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <!-- Content -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.backend.footer')

        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>
