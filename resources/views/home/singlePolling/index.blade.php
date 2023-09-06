{{-- @dd($poll); --}}
<x-app-layout>
    <h1 class="text-2xl font-semibold mb-3">{{$poll["title"]}}</h1>
    <p class="mb-3">{{$poll["body"]}}</p>

    <div class="space-y-3 mb-3">
        <x-poll-item>
            <x-slot name="button">
                <a href="/singlePolling/{{$poll["slug"]}}/profile" class="bg-slate-800 hover:bg-slate-900 py-1 px-3 rounded-sm flex items-center space-x-2">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                    <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                      <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                      <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z"/>
                    </g>
                  </svg>
                  <span class="text-sm">Profile</span>
                </a>
                <button class="bg-blue-500 py-1 px-3 rounded-sm flex items-center space-x-2 hover:bg-blue-700">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                      </svg>
                    <span class="text-sm">Vote</span>
                </button>
            </x-slot>
        </x-poll-item>
        <x-poll-item>
            <x-slot name="button">
                <a href="/singlePolling/{{$poll["slug"]}}/profile" class="bg-slate-800 hover:bg-slate-900 py-1 px-3 rounded-sm flex items-center space-x-2">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                    <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                      <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                      <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z"/>
                    </g>
                  </svg>
                  <span class="text-sm">Profile</span>
                </a>
                <button class="bg-blue-700 py-1 px-3 rounded-sm flex items-center space-x-2 hover:bg-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                      </svg>
                    <span class="text-sm">Vote</span>
                </button>
            </x-slot>
        </x-poll-item>
        <x-poll-item>
            <x-slot name="button">
                <a href="/singlePolling/{{$poll["slug"]}}/profile" class="bg-slate-800 hover:bg-slate-900 py-1 px-3 rounded-sm flex items-center space-x-2">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                    <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                      <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                      <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z"/>
                    </g>
                  </svg>
                  <span class="text-sm">Profile</span>
                </a>
                <button class="bg-blue-500 py-1 px-3 rounded-sm flex items-center space-x-2 hover:bg-blue-700">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                      </svg>
                    <span class="text-sm">Vote</span>
                </button>
            </x-slot>
        </x-poll-item>
    </div>

    {{-- PyeChart --}}
    <div class="w-full flex justify-center">
      <div class="max-w-sm w-full rounded-md border p-4 md:p-6">
      <div class="py-6" id="pie-chart"></div>
      </div>
    </div>
    
    <div class="flex justify-end">
        <a href="/" class="flex items-center space-x-1 group hover:underline">
            <svg class="w-4 h-4 group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
              </svg>
            <span>Kembali</span></a>
    </div>
</x-app-layout>

<script src="/js/apexcharts.js"></script>
