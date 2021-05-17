<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&family=Roboto:wght@400;500&display=swap"
          rel="stylesheet">
    <link rel="shortcut icon" href="/img/logo.png" type="image/png">
    <link rel="stylesheet" href="/css/index.css">
    <title>@yield('title')</title>
</head>
<body>
    @include('header')
    @yield('main')
    @include('footer')
</body>
</html>
