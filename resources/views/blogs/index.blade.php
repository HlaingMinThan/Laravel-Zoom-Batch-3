<x-layout>
    <div class="container">
        @foreach($blogs as $blog)
        <x-blog-card :blog="$blog" />
        @endforeach
    </div>
</x-layout>