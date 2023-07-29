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
    <div class="container">
        <?php foreach($blogs as $blog) : ?>
        <h1><a href="/blogs/{{$blog->slug}}">{{$blog->title}}</a></h1>
        <p>
            {!!$blog->body!!}
        </p>
        <p>published at - {{$blog->created_at}}</p>
        <?php endforeach; ?>
    </div>
    <script src="{{asset('/js/app.js')}}"></script>
</body>

</html>