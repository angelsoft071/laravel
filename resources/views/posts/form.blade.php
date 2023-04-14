<label for="avatar">
    Avatar URL
    <input type="text" name="avatar" value="{{ old('avatar', $post->avatar ?? 'https://i.pravatar.cc/150?u=' . uniqid()) }}">
    @error('avatar')
        <br>
        <small style="color: red">{{ $message }}</small>
    @enderror
</label>
<br>
<label for="title">
    Title
    <input type="text" name="title" value="{{ old('title', $post->title) }}">
    @error('title')
        <br>
        <small style="color: red">{{ $message }}</small>
    @enderror
</label>
<br>
<label for="body">
    Body
    <textarea name="body">{{ old('body', $post->body) }}</textarea>
    @error('body')
        <br>
        <small style="color: red">{{ $message }}</small>
    @enderror
</label>
