<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') - Praktikum CMS 2025</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fc;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #4e73df;
            background-image: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
            background-size: cover;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 1rem;
        }
        .sidebar .nav-link:hover {
            color: #fff;
        }
        .sidebar .sidebar-brand {
            height: 4.375rem;
            font-size: 1.2rem;
            font-weight: 800;
            color: #fff;
            text-decoration: none;
        }
        .topbar {
            height: 4.375rem;
        }
        .card-stats {
            border-left: 0.25rem solid;
            border-radius: 0.35rem;
        }
        .card-stats.primary {
            border-left-color: #4e73df;
        }
        .card-stats.success {
            border-left-color: #1cc88a;
        }
        .card-stats.info {
            border-left-color: #36b9cc;
        }
        .card-stats.warning {
            border-left-color: #f6c23e;
        }
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #fff;
            padding: 1.5rem 0;
        }
    </style>
    
    @yield('styles')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            @include('partials.sidebar')
            
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @include('partials.navbar')
                
                <div class="container mt-4">
                    @yield('content')
                </div>
                
                @include('partials.footer')
            </main>
        </div>
    </div>
    
    @include('partials.scripts')
    
    @yield('scripts')
</body>
</html>