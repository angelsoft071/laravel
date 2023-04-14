<x-layouts.app
    title="Register"
    meta-description="Register Description"
>
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">
        Register
    </h1>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <label for="username">
            Username
            <input type="text" name="username" value="{{ old('username') }}">
            @error('username')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br>
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
        <label for="password_confirmation">
            Password Confirmation
            <input type="password" name="password_confirmation">
            @error('password_confirmation')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br>
        <input type="submit" value="Register">
    </form>
</x-layouts.app>
