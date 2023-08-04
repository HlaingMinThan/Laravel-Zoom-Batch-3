<x-layout>
    <div class="container">
        <h1>{{$blog->title}}</h1>
        <p>
            {!!$blog->body!!}
        </p>
        <p>published at - {{$blog->created_at}}</p>
    </div>
</x-layout>