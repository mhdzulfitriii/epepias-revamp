<x-guest-layout>

    <div class="my-[70px]">
        <div class="max-w-[30rem] mx-auto my-6 lg:mb-14 text-center">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">MyProgram PEPIAS</h2>
            <p class="mt-1 text-gray-600 dark:text-gray-400">Program terkini PEPIAS</p>
        </div>

        <div class="">

        </div>

        @if (isset($program['type']))
            <div class="max-w-[60rem] mx-auto">

                <div>
                    <ul>
                        <li>
                            <div class="flex items-center p-4 mb-4 text-sm text-teal-800 rounded-lg bg-teal-50 dark:bg-gray-800 dark:text-teal-400"
                                role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Ching!!</span> Program ini telah didaftarkan melalui
                                    E-PEPIAS.
                                    Anda akan mendaftar secara terus melalui E-PEPIAS. Klik Daftar Segera untuk
                                    meneruskannya.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        @endif


        <div
            class="flex max-sm:flex-col border p-5 max-sm:mx-5 bg-white rounded-xl shadow-2xl md:mx-auto   mt-5 max-w-[70rem]  max-sm:px-3 mb-10">

            <img src="@if (isset($program['type'])) {{ url($program->image->link) }} 
        @else 
            {{ url($program->image->link) }} @endif"
                class="h-auto lg:max-w-md md:max-w-md sm:max-w-full md:m-5 rounded-xl shadow-2xl"
                alt="image description">



            <div class="w-full  lg:px-5">
                <form action="">
                    @csrf
                    <div class="mt-8 grid lg:grid-cols-1 gap-4">

                        <div>
                            <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Nama
                                Program</label>
                            <input type="text" name="name" id=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $program['NamaProgram'] }}" readonly />
                        </div>

                        <div>
                            <label for="Tempat" class="text-sm text-gray-700 block mb-1 font-medium">Tempat</label>
                            <input name="" readonly value="{{ $program['Tempat'] }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="">
                        </div>

                        <div>
                            <label for="tarikh" class="text-sm text-gray-700 block mb-1 font-medium">Tarikh</label>
                            <input readonly
                                value=" {{ \Carbon\Carbon::parse($program['StartDate'])->format('j F Y') }} @if ($program['EndDate'] && $program['EndDate'] != $program['StartDate']) - {{ \Carbon\Carbon::parse($program['EndDate'])->format('j F Y') }} @endif"
                                name=""
                                class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="">
                        </div>


                        <div>
                            <label for="Tempat" class="text-sm text-gray-700 block mb-1 font-medium">Persatuan</label>
                            <input name="tarikh" readonly value="{{ $program->Persatuan->Singkatan }}"
                                class="uppercase bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="">
                        </div>

                        <div>
                            <label for="Tempat" class="text-sm text-gray-700 block mb-1 font-medium">Mod
                                Program</label>
                            <input name="tarikh" readonly value="{{ $program['Mode'] }}"
                                class="uppercase bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="">
                        </div>

                        @if (isset($program['type']))
                            <a href="https://epepias.org/tetamu/program/daftar/{{ str_replace(' ', '_', $program['programName']) }}"
                                class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                                Daftar Segera !
                            </a>
                        @else
                            <a href="{{ route('guest.daftar.program', ['id' => $program['id'], 'slug' => $program['Slug']]) }}"
                                class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                                Daftar Segera !
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-guest-layout>
