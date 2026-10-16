<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/blog">Blog</a>
    <a href="/contact">Contact</a>

    <h1> HALAMAN ABOUT </h1>

    <h3> Kaprodi : {{$nama}}</h3>

    <img accesskey="" src="{{ asset('img/Nailong.jpg') }}" alt="Kaprodi" width="500">
</body>
</html>