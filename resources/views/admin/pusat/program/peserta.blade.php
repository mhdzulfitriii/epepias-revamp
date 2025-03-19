<x-admin-layouts>

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        {{-- <div class="mb-4  font-extrabold leading-none tracking-tight text-gray-900 md:text-xl dark:text-white">
            Senarai Peserta
            <h6 class="text-sm font-medium dark:text-white"></h6>
        </div> --}}

        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="bg-white border border-gray-200 rounded-xl shadow-2xs overflow-hidden">
                        <!-- Header -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                            <div>
                                <div class="mb-4  font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl dark:text-white">
                                    Senarai Peserta
                                    <h6 class="text-sm font-medium dark:text-white"> 
                                        {{ $program->NamaProgram }}
                                    </h6>
                                </div>
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
                                    <th scope="col" class="px-6 py-3 text-start max-w-[10px]">
                                        <span class="text-xs font-semibold uppercase text-gray-800">
                                            Bil
                                        </span>
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase text-gray-800">
                                                Nama Peserta
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <span class="text-xs font-semibold uppercase text-gray-800">
                                            Perhubungan
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-center ">
                                        <span class="text-xs font-semibold uppercase text-gray-800">
                                            No. Tel Penjaga
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-center">
                                        <span class="text-xs font-semibold uppercase text-gray-800">
                                            Alahan
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-center w-[200px]">
                                        <span class="text-xs font-semibold uppercase text-gray-800">
                                            Alamat
                                        </span>
                                    </th>

                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                @foreach ($list as $item)
                                    <tr>
                                        <td class="w-[20px]">
                                            <div class="px-6 py-3">
                                                <span class="text-sm text-gray-600"> {{ $loop->iteration }} </span>
                                            </div>
                                        </td>
                                        <td class="w-[100px]">
                                            <div class="px-6 py-3">
                                                <span class="text-sm text-gray-600">{{ $item->NamaPenuh }}</span>
                                                <div class=" font-bold">
                                                    <span class="text-xs text-gray-600"> {{ $item->Persatuan }}
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="size-px whitespace-nowrap text-start max-w-[50px]">
                                            <div class="px-6 py-3">
                                                <div class="flex items-center gap-x-2">
                                                    <div class="grow">
                                                        <span class="text-sm text-gray-600">{{ $item->email }}</span>
                                                        <br>
                                                        <span class="text-sm text-gray-600">{{ $item->NoPhone }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="size-px whitespace-nowrap text-center max-w-[50px]">
                                            <div class="px-6 py-3">
                                                <div class="flex items-center gap-x-2">
                                                    <div class="grow">
                                                        <span
                                                            class="text-sm text-gray-600">{{ $item->NoPhonePenjaga }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="size-px whitespace-nowrap text-center max-w-[50px]">
                                            <div class="px-6 py-3">
                                                <div class="flex items-center gap-x-2">
                                                    <div class="grow">
                                                        <span class="text-sm text-gray-600">{{ $item->Alahan }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class=" text-center">
                                            <div class="px-6 py-3">
                                                <span class="text-sm text-gray-600">{{ $item->Alamat }}
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                            {{$list->links()}}
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 flex justify-start gap-x-2">
            <a type="button" href="{{ route('pusat.program.index') }}"
                class="py-1.5 sm:py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                Keluar
            </a>            
        </div>
        <!-- End Card -->
    </div>

</x-admin-layouts>
