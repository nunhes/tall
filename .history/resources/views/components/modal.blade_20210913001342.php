 <div class="flex fixed top-0 bg-gray-900 bg-opacity-60 items-center w-full h-full" x-show="showSubscritor" x-on:click.self="showSubscritor=false" x-on:keydown.escape.window="showSubscritor=false">
     <div class="m-auto bg-pink-500 shadow-2xl rounded-xl p-8">
         {{ $slot }}
     </div>
 </div>
