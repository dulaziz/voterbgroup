{{-- @dd($poll); --}}
<x-app-layout>
    <h1 class="text-2xl font-semibold mb-3">{{$poll["title"]}}</h1>
    <p class="mb-3">{{$poll["body"]}}</p>

    <div class="space-y-3 mb-3">
        <x-poll-item></x-poll-item>
        <x-poll-item></x-poll-item>
        <x-poll-item></x-poll-item>
    </div>
    <div class="flex justify-end">
        <a href="/" class="flex items-center space-x-1 group hover:underline">
            <svg class="w-4 h-4 group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
              </svg>
            <span>Kembali</span></a>
    </div>
</x-app-layout>