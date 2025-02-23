<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Xander Creative</title>
    <!-- Add any additional CSS here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Example of custom styles */
        body {
            background-color: #f8f9fa;
        }
        .admin-sidebar {
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
            color: white;
            height: 100vh;
            position: fixed;
        }
        .admin-sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
        }
        .admin-sidebar a:hover {
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="admin-sidebar">
        <h3 class="text-center text-white">Admin Dashboard</h3>
        <ul>
            <li><a href="{{ route('admin.about.index') }}">About Section</a></li>
            <li><a href="#">Other Sections</a></li>
            <li><a href="#">Manage Content</a></li>
            <!-- Add more admin links here -->
        </ul>
    </div>

    <div class="container" style="margin-left: 260px; padding-top: 30px;">
        @yield('content')
    </div>

    <!-- Optional JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
