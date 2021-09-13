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
