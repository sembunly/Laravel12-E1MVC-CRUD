<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <h1> Master Page</h1>
</body>
@include('layout.menu')

<h2>@yield('heading')</h2>
@yield('content')



</html>