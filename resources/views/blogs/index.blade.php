<x-layout>
    <div class="container">
        <form>
            <label for="">Search : </label>
            <input
                value="{{request('query')}}"
                type="text"
                name="query"
            >
            <button type="submit">search now</button>
        </form>
        @forelse($blogs as $blog)
        <x-blog-card :blog="$blog" />
        @empty
        <p>no search results found.</p>
        @endforelse
    </div>
</x-layout>