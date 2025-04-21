<head>
  <meta charset="UTF-8">
  <title>Post Test 5 - Arsha Template</title>

  <!-- Tambahkan ini -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
  @include('partials.navbar')
  
  <main id="main" style="margin-top: 80px">
    @yield('content')
  </main>
  
  @include('partials.footer')

  <!-- Tambahkan ini -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
