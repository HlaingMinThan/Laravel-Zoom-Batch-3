<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>Document</title>
    <link
        rel="stylesheet"
        href="{{ asset('/app.css') }}"
    >
</head>

<body>
    <nav>
        <ul>
            <li><a href="/">home</a></li>
            <li><a href="/about-us">about</a></li>
        </ul>
    </nav>
    {{$slot}}
    <footer>
        <ul>
            <li><a href="/">home</a></li>
            <li><a href="/about-us">about</a></li>
            <li><a href="/contact-us">contact us</a></li>
        </ul>
    </footer>
    <script src="{{asset('/js/app.js')}}"></script>
</body>

</html>