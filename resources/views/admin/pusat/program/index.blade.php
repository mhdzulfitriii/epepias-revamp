<x-admin-layouts>

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="mb-4  font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">
            MyProgram
            <h6 class="text-sm font-medium dark:text-white">Daftar dan kemaskini Program PEPIAS</h6>
        </div>

        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="bg-white border border-gray-200 rounded-xl shadow-2xs overflow-hidden">
                        <!-- Header -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800">
                                    MyProgram PEPIAS
                                </h2>
                                {{-- <p class="text-sm text-gray-600">
                                    Keys you have generated to connect with third-party clients or access the <a
                                        class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium"
                                        href="#">Preline API.</a>
                                </p> --}}
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                        href="{{ route('pusat.program.tambah') }}">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        Tambah
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase text-gray-800">
                                                Bil
                                            </span>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase text-gray-800">
                                                Nama Program
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-center">
                                        <div class=" gap-x-2">
                                            <span class="text-xs font-semibold uppercase text-gray-800">
                                                Tempat
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-center ">
                                        <div class=" gap-x-2">
                                            <span class="text-xs font-semibold uppercase text-gray-800">
                                                Cawangan
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-center">
                                        <div class=" gap-x-2">
                                            <span class="text-xs font-semibold uppercase text-gray-800">
                                                Tarikh
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-center">
                                        <div class=" gap-x-2">
                                            <span class="text-xs font-semibold uppercase text-gray-800">
                                                Jenis Program
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-center">
                                        <div class=" gap-x-2">
                                            <span class="text-xs font-semibold uppercase text-gray-800">
                                                Status
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-end max-w-[50px]"></th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                @foreach ($list as $item)
                                    <x-delete-confirmation modalId="deleteProgramModal-{{ $loop->iteration }}"
                                        title="Padam Rekod"
                                        message="Adakah anda pasti untuk padam rekod program {{ $item->NamaProgram }} ini ?"
                                        confirmRoute="{{ route('pusat.program.delete', $item->id) }}" />
                                    <tr>
                                        <td class="size-px whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                <span class="text-sm text-gray-600"> {{ $loop->iteration }} </span>
                                            </div>
                                        </td>
                                        <td class="size-px whitespace-wrap">
                                            <div class="px-6 py-3">
                                                <span class="text-sm text-gray-600">{{ $item->NamaProgram }}</span>
                                                {{-- <div class=" font-bold">
                                                    <span class="text-xs text-gray-600"> {{ $item->Desc }}
                                                    </span>
                                                </div> --}}
                                            </div>
                                        </td>
                                        <td class="size-px whitespace-nowrap text-center max-w-[50px]">
                                            <div class="px-6 py-3">
                                                <div class="flex items-center gap-x-2">
                                                    <div class="grow">
                                                        <span class="text-sm text-gray-600">{{ $item->Tempat }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="size-px whitespace-nowrap text-center max-w-[50px]">
                                            <div class="px-6 py-3">
                                                <div class="flex items-center gap-x-2">
                                                    <div class="grow">
                                                        <span
                                                            class="text-sm text-gray-600">{{ $item->Persatuan->Singkatan }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="size-px whitespace-nowrap text-center max-w-[50px]">
                                            <div class="px-6 py-3">
                                                <div class="flex items-center gap-x-2">
                                                    <div class="grow">
                                                        <span
                                                            class="text-sm text-gray-600">{{ \Carbon\Carbon::parse($item->StartDate)->translatedFormat('j F Y') }}
                                                            <br>
                                                            @if ($item->EndDate != null && $item->EndDate != $item->StartDate)
                                                                {{ \Carbon\Carbon::parse($item->EndDate)->translatedFormat('j F Y') }}
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="size-px whitespace-nowrap text-center max-w-[50px]">
                                            <div class="px-6 py-3">
                                                <div class="flex items-center gap-x-2">
                                                    <div class="grow">
                                                        <span
                                                            class="text-sm text-gray-600">{{ $item->JenisProgram }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="size-px whitespace-wrap text-center max-w-[50px]">
                                            <div class="px-6 py-3">
                                                <span
                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                    </svg>
                                                    {{ $item->Status }}
                                                </span>
                                            </div>
                                        </td>

                                        <td class="size-px max-w-[50px]">
                                            <div class="px-6 py-1.5">
                                                <div
                                                    class="hs-dropdown [--placement:bottom-right] relative inline-block">
                                                    <button id="hs-table-dropdown-1" type="button"
                                                        class="hs-dropdown-toggle py-1.5 px-2 inline-flex justify-center items-center gap-2 rounded-lg text-gray-700 align-middle disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm"
                                                        aria-haspopup="menu" aria-expanded="false"
                                                        aria-label="Dropdown">
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <circle cx="12" cy="12" r="1" />
                                                            <circle cx="19" cy="12" r="1" />
                                                            <circle cx="5" cy="12" r="1" />
                                                        </svg>
                                                    </button>
                                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden divide-y divide-gray-200 min-w-40 z-10 bg-white shadow-2xl rounded-lg p-2 mt-2"
                                                        role="menu" aria-orientation="vertical"
                                                        aria-labelledby="hs-table-dropdown-1">
                                                        <div class="py-2 first:pt-0 last:pb-0">
                                                            <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                                                                href="{{ route('pusat.program.kemaskini', ['id' => $item->id]) }}">
                                                                Kemaskini
                                                            </a>
                                                            <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                                                                href="{{ route('pusat.program.peserta', ['id' => $item->id, 'slug' => $item->Slug]) }}">
                                                                Senarai Peserta
                                                            </a>
                                                            <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                                                                href="{{ route('pusat.program.kemaskini', ['id' => $item->id]) }}">
                                                                Qr Kehadiran
                                                            </a>
                                                        </div>
                                                        <div class="py-2 first:pt-0 last:pb-0">                                                           
                                                            <input id="npm-install" type="hidden"
                                                                class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                value="{{ route('guest.view.program', ['slug' => $item->Slug]) }}">
                                                            <button data-copy-to-clipboard-target="npm-install"
                                                                class="flex w-full items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100">
                                                                Pautan Program
                                                            </button>


                                                        </div>
                                                        <div class="py-2 first:pt-0 last:pb-0">
                                                            {{-- <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-red-600 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500"
                                                                href="#">
                                                                Padam
                                                            </a> --}}
                                                            <button type="button"
                                                                class="flex w-full items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-red-600 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500"
                                                                data-hs-overlay="#deleteProgramModal-{{ $loop->iteration }}">
                                                                Padam
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
                            <div>
                                <p class="text-sm text-gray-600">
                                    <span class="font-semibold text-gray-800">6</span> results
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <button type="button"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m15 18-6-6 6-6" />
                                        </svg>
                                        Prev
                                    </button>

                                    <button type="button"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                        Next
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m9 18 6-6-6-6" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>

    <script>
        window.addEventListener('load', function() {
            const clipboard = FlowbiteInstances.getInstance('CopyClipboard', 'npm-install');
            const $defaultMessage = document.getElementById('default-message');
            const $successMessage = document.getElementById('success-message');

            clipboard.updateOnCopyCallback((clipboard) => {
                $defaultMessage.classList.add('hidden');
                $successMessage.classList.remove('hidden');

                // reset to default state
                setTimeout(() => {
                    $defaultMessage.classList.remove('hidden');
                    $successMessage.classList.add('hidden');
                }, 2000);
            });
        })
    </script>
</x-admin-layouts>
