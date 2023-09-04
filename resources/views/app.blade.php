{{-- @dd($poll) --}}
<x-app-layout title="Home Page">
    <div class="mb-6">
        <x-hero>
            <x-slot name="title">
                Selamat Datang di Polling Radar Bogor
            </x-slot>
            <x-slot name="content">
                Kami selalu menyediakan polling menarik untuk diikuti, berikut polling terbaru kami, dan nantikan poling menarik lainnya.
            </x-slot>  
        </x-hero>
    </div>

    <div class="mb-6 items-center md:grid grid-cols-2">
        <h2 class="text-xl font-semibold border-l-4 border-blue-500 pl-2 mb-3 md:mb-0">Daftar Polling</h2>
        <form action="">
            <div class="relative w-full">
                <input type="search" class="w-full rounded-md border border-slate-400 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari polling..." required>
                <button type="submit" class="absolute top-0 right-0 h-full bg-blue-500 p-2.5 text-white rounded-r-md hover:bg-blue-700">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </form>
    </div>

    <div class="flex flex-col md:grid grid-cols-3 gap-6 md:gap-3 mb-6">
        @foreach ($poll as $pol)    
        <x-card-main>
            <x-slot name="img">
                <img src="smpl.jpg" alt="" class="object-cover">
            </x-slot>
            <x-slot name="title">
                {{$pol["title"]}}
            </x-slot>
            <x-slot name="excerpt">
                {{$pol["excerpt"]}}
            </x-slot>
            <x-slot name="button">
                <a href="/singlePoll/{{$pol["slug"]}}" class="text-white text-md text-center bg-blue-500 px-5 py-2">Ikuti Polling</a>
                <a href="/singlePoll/{{$pol["slug"]}}" class="text-white text-md text-center bg-slate-800 px-5 py-2">Lihat Polling</a>
            </x-slot>
        </x-card-main>
        @endforeach
        {{-- <x-card-main>
            <x-slot name="img">
                <img src="honest bee.jpg" alt="" class="object-cover">
            </x-slot>
            <x-slot name="title">
                This Vote Title Name 2
            </x-slot>
            <x-slot name="excerpt">
                2 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, consectetur est placeat consequatur vel optio neque deserunt expedita numquam autem quidem eligendi architecto molestias nulla reiciendis. Sint aut adipisci accusamus.
            </x-slot>
        </x-card-main>
        <x-card-main>
            <x-slot name="img">
                <img src="smpl.jpg" alt="" class="object-cover">
            </x-slot>
            <x-slot name="title">
                This Vote Title Name 3
            </x-slot>
            <x-slot name="excerpt">
                3 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, consectetur est placeat consequatur vel optio neque deserunt expedita numquam autem quidem eligendi architecto molestias nulla reiciendis. Sint aut adipisci accusamus.
            </x-slot>
        </x-card-main>
        <x-card-main>
            <x-slot name="img">
                <img src="honest bee.jpg" alt="" class="object-cover">
            </x-slot>
            <x-slot name="title">
                This Vote Title Name 4
            </x-slot>
            <x-slot name="excerpt">
                4 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, consectetur est placeat consequatur vel optio neque deserunt expedita numquam autem quidem eligendi architecto molestias nulla reiciendis. Sint aut adipisci accusamus.
            </x-slot>
        </x-card-main> --}}
    </div>

    {{-- Pagination --}}
    
<div class="flex flex-col items-center">
    <!-- Help text -->
    <span class="text-sm">
Showing <span class="font-semibold">1</span> to <span class="font-semibold">10</span> of <span class="font-semibold"> Entries</span>
    </span>
    <!-- Buttons -->
    <div class="inline-flex mt-2 xs:mt-0">
        <button class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900">
            Prev
        </button>
        <button class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 border-0 border-l border-gray-700 rounded-r hover:bg-gray-900">
            Next
        </button>
    </div>
  </div>  

</x-app-layout>