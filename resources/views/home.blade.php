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
    <?php foreach($blogs as $blog) : ?>
    <div class="container">
        <h1><a href="/blogs/{{$blog['filename']}}">
                {{ $blog['title'] }}
            </a></h1>
        <p>{{$blog['intro']}}</p>
        <p>Published date - {{$blog['created_at']}}</p>
    </div>
    <?php endforeach; ?>
    <script src="{{asset('/js/app.js')}}"></script>
</body>

</html>