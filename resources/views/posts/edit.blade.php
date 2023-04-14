<x-layouts.app
    :title="$post->title"
    :meta-description="$post->body"
>
    <h1>Edit {{ $post->title }}</h1>
    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf @method('PATCH')
        @include('posts.form')
        <br>
        <button type="submit">Save</button>
    </form>
    <a href="{{ route('posts.edit', $post)}}">Edit</a>
    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf @method('DELETE')
        <input type="submit" value="Delete">
    </form>
    <a href="{{ route('posts.index') }}">Back</a>
</x-layouts.app>
