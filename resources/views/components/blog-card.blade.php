@props(['blog'])

<div>
    <h1><a href="/blogs/{{$blog->slug}}">{{$blog->title}}</a></h1>
    <p>
        {!!$blog->body!!}
    </p>
    <p>published at - {{$blog->created_at}}</p>
</div>