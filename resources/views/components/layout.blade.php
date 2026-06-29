@props([
'title'=> 'laracasts'
])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>
    <style>
        .max-w-400 {
            max-width: 400px;
            margin: auto;
        }

        .card {
            background: #e3e3e3;
            padding: 1rem;
            text-align: center
        }
    </style>

</head>
<nav>
    <a href="/">Home</a>
    <a href="/about">About Us</a>
    <a href="/contact">Contact Us</a>
</nav>
<main>
    {{ $slot}}
</main>

</body>

</html>