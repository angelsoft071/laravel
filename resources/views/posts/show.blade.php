<x-layouts.app
    :title="$post->title"
    :meta-description="$post->body"
>
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">
        {{ $post->title }}
    </h1>
    <img src="{{ $post->avatar }}" alt="avatar">
    <p>{{ $post->body }}</p>
    <a href="{{ route('posts.edit', $post)}}">Edit</a>
    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf @method('DELETE')
        <input type="submit" value="Delete">
    </form>
    <a href="{{ route('posts.index') }}">Back</a>
</x-layouts.app>
