<x-layouts.app
    title="Blog"
    meta-description="Blog Description"
>
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">
        Blog
    </h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                <small>
                    <a href="{{ route('posts.edit', $post)}}">Edit</a>
                </small>
            </li>
        @endforeach
    </ul>
    @auth
        <a href="{{ route('posts.create') }}">Create new post</a>
    @endauth
</x-layouts.app>
