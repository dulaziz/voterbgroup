<x-admin-main>
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-xl font-medium">Edit Kandidat</h1>
        <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-md focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
            Publish Edit
        </button>
    </div>
    <x-alert>
        Kandidat berhasil di edit...
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
            <a href="/admin/addCandidate" class="text-sm bg-blue-700 py-2 px-4 rounded-md text-white hover:bg-blue-800">Tambah Foto</a>
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