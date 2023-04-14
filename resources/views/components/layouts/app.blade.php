<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $metaDescription ?? 'Default description' }}">
    <title>App - {{ $title ?? 'Default title' }}</title>
    @vite([
        'resources/scss/app.scss',
        'resources/js/app.js'
    ])
</head>
<body>
    <x-layouts.nav />
    @if (session('status'))
        <div class="status">
            {{ session('status') }}
        </div>
    @endif
    {{ $slot }}
</body>
</html>
