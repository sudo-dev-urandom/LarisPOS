<!DOCTYPE html>
<html lang="en" data-bs-theme="{{ config('app.theme') }}">
<body class='pace-top'>
@include('partials.head')
@yield('content')
@include('partials.js')
</body>
</html>
