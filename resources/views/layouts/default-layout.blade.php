<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('/icons/logo.svg') }}" type="image/x-icon">
    <title>Kamplink</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <!-- Navbar -->
    <x-navbar></x-navbar>
    <!-- #End navbar -->

    <!-- Main content -->
    <div>
        {{ $slot }}
    </div>
    <!-- #End main content -->

    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>