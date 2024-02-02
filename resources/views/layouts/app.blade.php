<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

    <title>@yield('title', 'Buku Tamu Digital')</title>
</head>
<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark" id="sidebar">
        <div class="sidebar-header">
            <h3>Buku Tamu Digital</h3>
        </div>

        <ul class="list-unstyled components">
            <li >
                <a href="{{ route('home') }}">
                  <i class="bi bi-house"></i> Home
                </a>
            </li>
            <li>
                <a href="{{ route('souvenir') }}">
                  <i class="bi bi-book"></i> Souvenir
                </a>
            </li>
            <li>
                <a href="#">
                  <i class="bi bi-file-plus"></i> Add User
                </a>
            </li>
        </ul>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            {{-- Content Goes Here --}}
            @yield('content')
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Get the current URL path and assign "active" class to the corresponding sidebar link
        var path = window.location.pathname;
        path = path.replace(/\/$/, "");
        path = decodeURIComponent(path);

        $("#sidebar ul.components a").each(function () {
            var href = $(this).attr('href');
            if (path.substring(0, href.length) === href) {
                $(this).closest('li').addClass('active');
            }
        });
    });
</script>
<style>
    body {
          font-family: 'Roboto', sans-serif;
        background-color: #f8f9fa; /* Light gray background color */
    }

    #wrapper {
        display: flex;
    }

    #sidebar {
        background: #343a40; /* Dark background color */
        color: #fff;
        height: 100vh;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        transition: all 0.3s;
        border-top-right-radius: 20px; 
        border-bottom-right-radius: 20px;
    }

    #sidebar a {
        color: #fff;
        text-decoration: none;
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: #0000rgba(0, 0, 0, 0.1); /* Darker header background color */
    }

    #sidebar ul.components {
        padding: 20px 0;
      
    }

    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }

    #sidebar ul li a {
        padding: 15px; /* Increased padding for better touch usability */
        font-size: 1.2em;
        display: block;
    }

    #sidebar ul li a:hover {
        background: #4f4f4f;
    }

    #sidebar ul li.active > a,
    a[aria-expanded="true"] {
        background: #4f4f4f;
    }

    #sidebar i {
        margin-right: 10px;
    }

    @media (max-width: 768px) {
        #sidebar {
            margin-left: -250px;
            transition: margin 0.3s;
        }
        #sidebar.toggled {
            margin-left: 0;
        }
    }
    
</style>
</body>
</html>
