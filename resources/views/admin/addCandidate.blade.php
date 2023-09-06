<x-admin-main>
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-xl font-medium">Tambah Kandidat</h1>
        <button type="submit" class="inline-flex items-center space-x-2 px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-md focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 14h6m-3 3v-6M1.857 1h4.286c.473 0 .857.384.857.857v4.286A.857.857 0 0 1 6.143 7H1.857A.857.857 0 0 1 1 6.143V1.857C1 1.384 1.384 1 1.857 1Zm10 0h4.286c.473 0 .857.384.857.857v4.286a.857.857 0 0 1-.857.857h-4.286A.857.857 0 0 1 11 6.143V1.857c0-.473.384-.857.857-.857Zm-10 10h4.286c.473 0 .857.384.857.857v4.286a.857.857 0 0 1-.857.857H1.857A.857.857 0 0 1 1 16.143v-4.286c0-.473.384-.857.857-.857Z"/>
              </svg>
              <span>Publish Kandidat</span>
        </button>
    </div>
    <x-alert>
        Kandidat berhasil ditambah...
    </x-alert>
    <div class="border-2 border-slate-100 border-dashed p-4 rounded-md mb-6">
        <x-form-add>
            <x-slot name="label">Nama Kandidat</x-slot>
            <x-slot name="label3">Form Optional</x-slot>
            <x-slot name="input3">
                <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </x-slot>
        </x-form-add>
    </div>
    <div class="border-2 border-slate-100 border-dashed p-4 rounded-md mb-6">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-xl font-medium">Foto</h1>
            <a href="/admin/addCandidate" class="text-sm flex items-center space-x-2 bg-blue-700 py-2 px-4 rounded-md text-white hover:bg-blue-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z"/>
                  </svg>
                  <span>Tambah Foto</span>
            </a>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-4">
            <div class="relative w-52 h-52 overflow-hidden flex place-items-center rounded-md">
                <button class="absolute top-2 right-2 p-2 rounded-full bg-white/50 hover:bg-white shadow">
                    <svg class="w-3 h-3 text-gray-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                    </button>
                <img src="/honest bee.jpg" alt="" class="object-cover">
            </div>
            <div class="relative w-52 h-52 overflow-hidden flex place-items-center rounded-md">
                <button class="absolute top-2 right-2 p-2 rounded-full bg-white/50 hover:bg-white shadow">
                <svg class="w-3 h-3 text-gray-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
                <img src="/honest bee.jpg" alt="" class="object-cover">
            </div>
        </div>
    </div>
</x-admin-main>