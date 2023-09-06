<x-admin-main>
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-xl font-medium">Tambah Polling</h1>
        <button type="submit" class="inline-flex space-x-2 items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-md focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.994 19a8.999 8.999 0 1 1 3.53-17.281M5.995 9l4 4 7-8m-1 8v5m-2.5-2.5h5"/>
              </svg>  
            <span>Publish Polling</span>            
        </button>
    </div>

    <div class="border-2 border-slate-100 border-dashed p-4 rounded-md mb-6">
        <x-form-add>
            <x-slot name="label">Judul Polling</x-slot>
            <x-slot name="label3">Tanggal</x-slot>
            <x-slot name="input3">
                <div class="flex items-center space-x-4">
                    <input type="date" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <span class="text-sm text-gray-800">Sampai</span>
                    <input type="date" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>  
            </x-slot>
        </x-form-add>
    </div>
    <div class="border-2 border-slate-100 border-dashed p-4 rounded-lg">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-xl font-medium">Kandidat</h1>
            <a href="/admin/addCandidate" class="text-sm flex space-x-2 items-center bg-blue-700 py-2 px-4 rounded-md text-white hover:bg-blue-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 14h6m-3 3v-6M1.857 1h4.286c.473 0 .857.384.857.857v4.286A.857.857 0 0 1 6.143 7H1.857A.857.857 0 0 1 1 6.143V1.857C1 1.384 1.384 1 1.857 1Zm10 0h4.286c.473 0 .857.384.857.857v4.286a.857.857 0 0 1-.857.857h-4.286A.857.857 0 0 1 11 6.143V1.857c0-.473.384-.857.857-.857Zm-10 10h4.286c.473 0 .857.384.857.857v4.286a.857.857 0 0 1-.857.857H1.857A.857.857 0 0 1 1 16.143v-4.286c0-.473.384-.857.857-.857Z"/>
                  </svg>
                  <span>Tambah Kandidat</span>
            </a>
        </div>
        <x-poll-item>
            <x-slot name="button">
                <a href="/admin/editCandidate" class="bg-slate-800 py-1 px-3 rounded-md flex items-center space-x-1 hover:bg-slate-700">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z"/>
                        <path d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z"/>
                      </svg>
                    <span class="text-sm">Edit</span>
                </a>
                <button class="bg-red-500 py-1 px-3 rounded-md flex items-center space-x-1 hover:bg-red-700">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z"/>
                      </svg>
                    <span class="text-sm">Hapus</span>
                </button>
            </x-slot>
        </x-poll-item>
    </div>
</x-admin-main>