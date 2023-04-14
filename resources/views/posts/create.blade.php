<x-layouts.app
    title="Create a post"
    meta-description="Create a new post"
>
    <h1>Create new post</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        @include('posts.form')
        <br>
        <button type="submit">Save</button>
    </form>

    <a href="{{ route('posts.index') }}">Back</a>
</x-layouts.app>
