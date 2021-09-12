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
            <div class="flex flex-col w-1/3">
                <h1 class="text-white ">This is a simple genarili landin page</h1>
                <p>We are only cheeting up</p>
                <x-button>Subscribete</x-button>
            </div>
        </div>
    </div>

    <div class="flex flex-col bg-pink-500 w-full h-screen">

    </div>
</x-guest-layout>
