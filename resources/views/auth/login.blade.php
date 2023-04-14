<x-layouts.app
    title="Login"
    meta-description="Login Description"
>
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">
        Login
    </h1>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <label for="email">
            Email
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br>
        <label for="password">
            Password
            <input type="password" name="password">
            @error('password')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br>
        <label for="remember">
            Remember me
            <input type="checkbox" name="remember">
        </label>
        <br>
        <input type="submit" value="Login">
    </form>
</x-layouts.app>
