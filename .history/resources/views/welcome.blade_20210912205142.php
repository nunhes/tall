<x-guest-layout>
    <div class="flex flex-col bg-indigo-900 w-full h-screen">
        <nav class="flex pt-5 justify-between container mx-auto text-indigo-200">
            <a class="text-4xl font-extrabold" href="/">
                <x-application-logo class="w-16 h-16 fill-current"></x-application-logo>
            </a>
            <div class="flex justify-end">
                @auth
                <a href="{{ route('dashboard'
                    ) }}">Taboleiro</a>
                @else
                <a href="{{ route('login'
                    ) }}">Login</a>
                @endauth
            </div>
        </nav>
        <div class="flex container mx-auto items-center h-full">
            <div class="flex flex-col w-1/3 items-start">
                <h1 class="text-white font-bold text-5xl leading-tight">This is a simple general landing page</h1>
                <p class="text-indigo-200 text-xl mb-10">We are only cheeting up in this <span class="font-bold underline"> simple</span> general landing page</p>
                <x-button class="py-3 px-8 bg-red-500 hover:bg-red-600">Subscribete</x-button>
            </div>
        </div>
    </div>

    <div class="flex flex-col bg-pink-500 w-full h-screen">
        <p class="text-white text-5xl font-extrabold text-center"> Imos alo! </p>
        <form>
            <x-input class="px-5 py-3 w-80 border border-blue-400" type="email" name="email" placeholder="Email address"></x-input>
            <span class="text-gray-300 text-xs">We will send you a confirmation email.</span>
            <x-button class="py-8 px-5 mt-5 w-80 bg-blue-500 justify-center">Get in</x-button>
        </form>
    </div>
</x-guest-layout>
