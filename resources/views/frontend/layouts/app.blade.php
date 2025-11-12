<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pub Kamrup College')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-blue: #003b7a;
            --secondary-blue: #002855;
            --accent-red: #dc3545;
            --accent-green: #28a745;
            --accent-orange: #ff6b35;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .top-bar {
            background-color: var(--primary-blue);
            padding: 8px 0;
            font-size: 13px;
        }

        .top-bar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            transition: opacity 0.3s;
        }

        .top-bar a:hover {
            opacity: 0.8;
        }

        .main-header {
            background: white;
            padding: 20px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .college-logo { max-width: 100%; height: auto; }
        .azadi-logo { max-width: 200px; height: auto; }
        .naac-badge { color: #dc3545; font-weight: bold; font-size: 14px; margin-top: 5px; }

        .action-buttons .btn-custom {
            padding: 15px 25px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: transform 0.3s;
        }

        .action-buttons .btn-custom:hover {
            transform: translateY(-3px);
        }

        .btn-certificate { background-color: var(--accent-red); color: white; }
        .btn-portal { background-color: #17a2b8; color: white; }
        .btn-employer { background-color: #ffc107; color: #333; }
        .btn-itep { background-color: var(--accent-green); color: white; }

        .main-nav { background-color: var(--secondary-blue); box-shadow: 0 2px 10px rgba(0,0,0,0.2); }

        .main-nav .navbar-nav .nav-link {
            color: white !important;
            padding: 12px 15px;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .main-nav .navbar-nav .nav-link:hover {
            background-color: rgba(255,255,255,0.1);
        }

        .main-nav .dropdown-menu {
            background-color: var(--secondary-blue);
            border: none;
        }

        .main-nav .dropdown-item {
            color: white;
            padding: 10px 20px;
        }

        .main-nav .dropdown-item:hover {
            background-color: rgba(255,255,255,0.1);
        }

        .announcement-bar {
            background: linear-gradient(90deg, var(--accent-red) 0%, #dc3545 100%);
            padding: 10px 0;
            color: white;
        }

        .announcement-content { overflow: hidden; white-space: nowrap; }
        .announcement-text {
            display: inline-block;
            padding-left: 100%;
            animation: scroll-left 30s linear infinite;
        }

        @keyframes scroll-left {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }

        @media (max-width: 768px) {
            .action-buttons .btn-custom { padding: 10px 15px; font-size: 12px; margin: 5px; }
            .azadi-logo { max-width: 150px; margin-top: 15px; }
            .top-bar { font-size: 11px; }
            .top-bar a { margin: 0 5px; }
            .main-nav .navbar-nav .nav-link { padding: 10px 15px; }
        }

        @media (max-width: 576px) {
            .action-buttons .btn-custom { width: 100%; margin: 5px 0; }
        }
    </style>

    @stack('styles')
</head>

<body>
@include('frontend.partials.topbar')
@include('frontend.partials.header')
@include('frontend.partials.navbar')
@include('frontend.partials.announcement')

<main>
    @yield('content')
</main>
@include('frontend.partials.footer')
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
