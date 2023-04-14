<x-layouts.app
    title="Start"
    meta-description="Start Description"
>
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">
        Start
    </h1>
    @auth
        {{ Auth::user()->name }}
        {{ Auth::user()->email }}
    @endauth
</x-layouts.app>
