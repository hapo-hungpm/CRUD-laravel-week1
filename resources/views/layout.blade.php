<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Js -->
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center align-content-center big-header">
        <a href="{{ route('users.index') }}"><h1>User management</h1></a>
    </div>

    @yield('content')

</div>
</body>
</html>