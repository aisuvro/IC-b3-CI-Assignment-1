<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        {{ $slot }}
    </body>
</html>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>{{ $title ?? 'Page Title' }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="src/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/assets/img/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" href="src/assets/img/favicon/favicon.ico">

    <!-- Stylesheets -->
    <link href="src/assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="src/assets/css/style.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
<!-- JavaScripts -->
<script src="src/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>