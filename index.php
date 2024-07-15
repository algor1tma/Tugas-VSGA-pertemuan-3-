<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu with Submenus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General navbar styling */
        .navbar {
            background-color: #f8f9fa; /* Light background for navbar */
        }
        .navbar-brand, .nav-link {
            color: #000000 !important; /* Black text for brand and links */
        }
        .nav-link:hover {
            color: #007bff !important; /* Blue text on hover */
        }

        /* Dropdown menu styling */
        .dropdown-menu {
            background-color: #f8f9fa; /* Light background for dropdown */
            border: none; /* Remove border */
        }
        .dropdown-item {
            color: #000000; /* Black text for dropdown items */
        }
        .dropdown-item:hover {
            background-color: #e9ecef; /* Light grey background on hover */
        }

        /* Custom CSS for right-aligning dropdown-menu */
        .dropdown-menu-right {
            left: auto;
            right: 0;
        }

        /* Submenu specific styling */
        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Selamat datang </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Web Development</a></li>
                            <li><a class="dropdown-item" href="#">SEO</a></li>
                            <li><a class="dropdown-item" href="#">Marketing</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">More Services</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Consulting</a></li>
                                    <li><a class="dropdown-item" href="#">Support</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <li><a class="dropdown-item" href="#">Product 1</a></li>
                            <li><a class="dropdown-item" href="#">Product 2</a></li>
                            <li><a class="dropdown-item" href="#">Product 3</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">More Products</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Product 4</a></li>
                                    <li><a class="dropdown-item" href="#">Product 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Custom JS for Dropdown Submenu -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var dropdownSubmenus = document.querySelectorAll('.dropdown-submenu');
            dropdownSubmenus.forEach(function (submenu) {
                submenu.addEventListener('mouseenter', function () {
                    var dropdownMenu = this.querySelector('.dropdown-menu');
                    var bounding = dropdownMenu.getBoundingClientRect();
                    var isOffScreen = (bounding.right > (window.innerWidth || document.documentElement.clientWidth));
                    if (isOffScreen) {
                        dropdownMenu.classList.add('dropdown-menu-right');
                    }
                });
            });
        });
    </script>
</body>
</html>
