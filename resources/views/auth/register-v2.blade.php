<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MyPKPIM') }} : Login</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('MyPKPIM_C.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@preline/collapse@2.0.2/index.min.js"></script>
</head>

<body>
    <div
        class="flex min-h-full md:w-2/6 flex-col justify-center px-6 py-12 lg:px-8 m-auto mt-11 box-border rounded-2xl shadow-xl  bg-white ">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="object-scale-down mx-auto h-[100px] w-auto  mb-5" src="PEPIAS.png" alt="LOGO PEPIAS">
            <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 mb-5">Daftar E-PEPIAS
            </h2>
        </div>

        <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">

            <form class="space-y-6" action="{{ route('register') }}" method="POST">
                @csrf
                <div>
                    <div class="mt-2">
                        <div class="relative">
                            <input type="email" name="email" id="email" required value="{{ old('email') }}"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            <label for="email"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">E-mel</label>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">

                    </div>
                    <div class="mt-2">
                        <div class="relative">
                            <input type="text" name="fullName" id="fullName" required value="{{ old('fullName') }}"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder="" />
                            <label for="fullName"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Nama
                                Penuh</label>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">

                    </div>
                    <div class="mt-2">
                        <div class="relative">
                            <input type="number" name="icNumber" id="icNumber" required value="{{ old('icNumber') }}"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder="Without (-)"
                                oninput="javascript: if (this.value.length > 12) this.value = this.value.slice(0, 12);" />
                            <label for="icNumber"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">No.
                                Kad Pengenalan</label>
                        </div>
                        <div class="mt-2 flex p-2 text-xs text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                            role="alert">
                            <svg class="flex-shrink-0 inline w-3 h-3 me-2 mt-[1px]" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Sila pastikan Umur anda:</span>
                                <ul class="mt-1 list-disc list-inside">
                                    <li class="text-xs">Melebihi 15 tahun dan kurang dari 25 tahun</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">

                    </div>
                    <div class="mt-2">
                        <div class="relative">
                            <input type="text" name=" noPhone" id=" noPhone" required value="{{ old('noPhone') }}"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder="" />
                            <label for=" noPhone"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">No
                                Tel</label>
                        </div>
                    </div>
                </div>


                <label for="cawangan" class="block text-sm font-medium text-gray-900 dark:text-white"></label>
                <select id="cawangan" name="cawangan"
                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    <option disabled selected>Pilih Cawangan</option>                    

                    <option value="Bangi" {{ old('cawangan') == 'Bangi' ? 'selected' : '' }}>Bangi</option>
                    <option value="Ampang" {{ old('cawangan') == 'Ampang' ? 'selected' : '' }}>Ampang</option>
                    <option value="Kuala Langat" {{ old('cawangan') == 'Kuala Langat' ? 'selected' : '' }}>Kuala Langat
                    </option>
                    <option value="Kuala Selangor" {{ old('cawangan') == 'Kuala Selangor' ? 'selected' : '' }}>Kuala
                        Selangor</option>
                    <option value="Gombak" {{ old('cawangan') == 'Gombak' ? 'selected' : '' }}>Gombak</option>
                    <option value="Sabak Bernam" {{ old('cawangan') == 'Sabak Bernam' ? 'selected' : '' }}>Sabak Bernam
                    </option>
                    <option value="Petaling Jaya" {{ old('cawangan') == 'Petaling Jaya' ? 'selected' : '' }}>Petaling
                        Jaya</option>
                        <option value="Klang" {{ old('cawangan') == 'Klang' ? 'selected' : '' }}>Klang</option>
                        <option value="Shah Alam" {{ old('cawangan') == 'Shah Alam' ? 'selected' : '' }}>Shah Alam</option>

                </select>

                <label for="gender" class="block text-sm font-medium text-gray-900 dark:text-white mt-4"></label>
                <select id="gender" name="gender"
                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    <option disabled selected>Jantina</option>
                    <option value="Lelaki" {{ old('gender') == 'Pusat' ? 'selected' : '' }}>Lelaki</option>
                    <option value="Perempuan" {{ old('gender') == 'bangi' ? 'selected' : '' }}>Perempuan</option>
                </select>


                <div>

                    <div class="mt-2">
                        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
                        <div class="py-2" x-data="{ show: true }">
                            <div class="relative">
                                <input placeholder="" :type="show ? 'password' : 'text'" name="password" id="password"
                                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                <label for="password"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Kata
                                    Laluan</label>
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" @click="show = !show"
                                        :class="{ 'hidden': !show, 'block': show }" viewBox="0 0 20 20"
                                        fill="currentColor" class="w-5 h-5">
                                        <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
                                        <path fill-rule="evenodd"
                                            d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" @click="show = !show"
                                        :class="{ 'block': !show, 'hidden': show }" viewBox="0 0 20 20"
                                        fill="currentColor" class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                            d="M3.28 2.22a.75.75 0 00-1.06 1.06l14.5 14.5a.75.75 0 101.06-1.06l-1.745-1.745a10.029 10.029 0 003.3-4.38 1.651 1.651 0 000-1.185A10.004 10.004 0 009.999 3a9.956 9.956 0 00-4.744 1.194L3.28 2.22zM7.752 6.69l1.092 1.092a2.5 2.5 0 013.374 3.373l1.091 1.092a4 4 0 00-5.557-5.557z"
                                            clip-rule="evenodd" />
                                        <path
                                            d="M10.748 13.93l2.523 2.523a9.987 9.987 0 01-3.27.547c-4.258 0-7.894-2.66-9.337-6.41a1.651 1.651 0 010-1.186A10.007 10.007 0 012.839 6.02L6.07 9.252a4 4 0 004.678 4.678z" />
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div>

                    <div class="mt-2">
                        <div class="relative">
                            <input type="password" name="password_confirmation" autocomplete="password"
                                value="{{ old('password_confirmation') }}" id="repeat_password" required
                                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            <label for="repeat password"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Pengesahan
                                Kata Laluan</label>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">


                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Sila pastikan Kata Laluan ada:</span>
                        <ul class="mt-1.5 list-disc list-inside">
                            <li>Sekurang-kurangnya 8 aksara</li>
                            <li>Sekurang-kurangnya satu aksara huruf kecil dan besar</li>
                            <li>Penyertaan sekurang-kurangnya satu aksara khas, contohnya, ! @ # ?</li>
                            <li>Sekurang-kurangnya satu aksara nombor</li>
                        </ul>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Daftar</button>
                </div>

                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                        role="alert">
                                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                        </svg>
                                        <span class="sr-only">Info</span>
                                        <div>
                                            <span class="font-medium">Danger alert!</span> {{ $error }}
                                            submitting again.
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </form>

            <p class="mt-1 text-center text-sm text-gray-900">
                Anda mempunyai akaun ?
                <a href="/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Log masuk </a>
            </p>
        </div>
    </div>
</body>
