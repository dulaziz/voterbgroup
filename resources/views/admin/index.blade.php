<x-admin-main>
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-xl font-medium">Daftar Polling</h1>
        <a href="admin/addPolling" class="inline-flex space-x-2 items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-md focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.994 19a8.999 8.999 0 1 1 3.53-17.281M5.995 9l4 4 7-8m-1 8v5m-2.5-2.5h5"/>
              </svg>  
            <span>Tambah Polling</span>            
        </a>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Judul Polling
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Participant
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Polling Pilpres 2024
                    </th>
                    <td class="px-6 py-4">
                        12/09/2024 s/d 15/09/2024
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-blue-700 font-semibold">Dimulai</span>
                    </td>
                    <td class="px-6 py-4">
                        2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="/admin/editPolling" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Polling Pilkot Bogor 2024
                    </th>
                    <td class="px-6 py-4">
                        12/09/2024 s/d 15/09/2024
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-slate-700 font-semibold">Segera</span>
                    </td>
                    <td class="px-6 py-4">
                        1999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Polling Ketua RT 2024
                    </th>
                    <td class="px-6 py-4">
                        12/09/2024 s/d 15/09/2024
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-red-500 font-semibold">Berakhir</span>
                    </td>
                    <td class="px-6 py-4">
                        99
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-admin-main>