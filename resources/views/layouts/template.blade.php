<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'product')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9NDikXlfyF+NNg5dTgr8cGFtK9i+7IpFfQ2s4fH5uOVfxUMGHobNq3VDX8k33rhX" crossorigin="anonymous">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: #B2C9B2 !important; /* Sage Green */
        }
        .navbar-brand, .nav-link {
            color: #fff !important; /* White text */
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #0c790c !important; /* Lighter Sage on hover */
        }
        .nav-link.active, {
            font-weight: 600;
            color: #0c790c !important; /* Active link color */
        }
        footer {
            background-color: #B2C9B2; /* Sage Green */
            text-align: center;
            color: #0c790c !important;
            font-weight: bold;
            padding: 0.5rem 0;
            margin-top: 3px;
        }
        .navbar-nav li {
            margin-right: 15px;
        }
        .dropdown-menu {
            background-color: #B2C9B2; /* Sage Green */
        }
        .dropdown-item {
            color: white;
        }
        .dropdown-item:hover {
            background-color: #0c790c;
        }
    </style>

    @vite(['resources/sass/app.scss'])
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('dashboard') }}">Item</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('products.index') ? 'active' : '' }}" href="{{ route('products.index') }}">Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('products.create') ? 'active' : '' }}" href="{{ route('products.create') }}">Tambah Product</a>
                    </li>
                    <!-- Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Tab</a></li>
                            <li><a class="dropdown-item" href="#">Phone</a></li>
                            <li><a class="dropdown-item" href="#">TWS</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container">
        @yield('body')
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Product - All Rights Reserved</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ksmD9mqmhMmmzOz6cpK1yzoKpvx4NR0FtI4nR7KcLeYlBiXJjkz4zrbjZFLGFpMt" crossorigin="anonymous"></script>
    @vite(['resources/js/app.js'])
</body>
</html>
