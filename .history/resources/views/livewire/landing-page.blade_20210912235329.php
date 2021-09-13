<div class="flex flex-col bg-indigo-900 w-full h-screen" x-data="{
        showSubscritor: true,
        showSuccess: true,
     }">
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
            <x-button class="py-3 px-8 bg-red-500 hover:bg-red-600" x-on:click="showSubscritor=true">Subscribete</x-button>
        </div>
    </div>

    <div class="flex fixed top-0 bg-gray-900 bg-opacity-60 items-center w-full h-full" x-show="showSubscritor" x-on:click.self="showSubscritor=false" x-on:keydown.escape.window="showSubscritor=false">
        <div class="m-auto bg-pink-500 shadow-2xl rounded-xl p-8">
            <p class="text-white text-5xl font-extrabold text-center"> Imos alo! </p>
            <form class="flex flex-col items-center p-24" wire:submit.prevent="subscribe">
                <x-input class="px-5 py-3 w-80 border border-blue-400" type="email" name="email" placeholder="Email address" wire:model="email"></x-input>
                <span class="text-gray-100 text-xs">We will send you a confirmation email.</span>
                <x-button class="py-3 px-5 mt-5 w-80 bg-blue-500 justify-center" wire:>Get in</x-button>
            </form>
        </div>
    </div>

    <div class="flex fixed top-0 bg-gray-900 bg-opacity-60 items-center w-full h-full" x-show="showSuccess" x-on:click.self="showSuccess=false" x-on:keydown.escape.window="showSuccess=false">
        <div class="m-auto bg-green-500 shadow-2xl rounded-xl p-8">
            <p class="animate-pulse text-white text-9xl font-extrabold text-center"> &check; </p>
            <p class="text-white text-5xl font-extrabold text-center mt-16"> Grande! </p>
            <p class="text-white text-3xl text-center"> Consulta o teu correo! </p>
        </div>
    </div>
</div>
