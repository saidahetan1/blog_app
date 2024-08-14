<x-layout>
    {{-- Heading --}}
    <h1 class="title">Search Results</h1>

    {{-- Displaying Search Query --}}
    <p class="mb-4">Results for: <strong>{{ request('query') }}</strong></p>

    {{-- Session Messages --}}
    @if (session('success'))
        <x-flashMsg msg="{{ session('success') }}" />
    @elseif (session('delete'))
        <x-flashMsg msg="{{ session('delete') }}" bg="bg-red-500" />
    @endif

    {{-- Display Search Results --}}
    @if ($posts->isEmpty())
        <p>No posts found.</p>
    @else
        <div class="grid grid-cols-3 gap-6">
            @foreach ($posts as $post)
                {{-- Post card component --}}
                <x-postCard :post="$post">
                    <div class="flex items-center justify-end gap-4 mt-6">
                        {{-- Update post --}}
                        <a href="{{ route('posts.edit', $post) }}"
                            class="bg-green-500 text-white px-2 py-1 text-xs rounded-md">Update</a>

                        {{-- Delete post --}}
                        <form action="{{ route('posts.destroy', $post) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 text-white px-2 py-1 text-xs rounded-md">Delete</button>
                        </form>
                    </div>
                </x-postCard>
            @endforeach
        </div>

        {{-- Pagination links --}}
        <div>
            {{ $posts->links() }}
        </div>
    @endif

</x-layout>
