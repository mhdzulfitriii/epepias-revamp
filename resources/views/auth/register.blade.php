@extends('layouts.user-onboard')

@section('content')

    <div class="">
        <img class="object-scale-down mx-auto h-[100px] w-auto  my-5 mt-10" src="PEPIAS.png" alt="LOGO PEPIAS">
    </div>
    <div
        class="flex border min-h-full md:max-w-4xl flex-col justify-center px-6 py-12 lg:px-8 m-auto mt-11 box-border rounded-2xl shadow-xl  bg-white ">
        {{-- <div class="">
            <img class="object-scale-down mx-auto h-[100px] w-auto  mb-5" src="PEPIAS.png" alt="LOGO PEPIAS">
            
        </div> --}}

        <div class="mt-2">

            @if ($errors->any())
                <div class="">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <div class="max-w-[85rem] mx-auto">

                                <div>
                                    <ul>
                                        <li>
                                            <div class="flex items-center p-4 mb-4 text-sm text-teal-800 rounded-lg bg-teal-50 dark:bg-gray-800 dark:text-teal-400"
                                                role="alert">
                                                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                                </svg>
                                                <span class="sr-only">Info</span>
                                                <div>
                                                    {{ $error }}
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-3" action="{{ route('daftar.perform') }}"
                method="POST">
                @csrf

                <div class="md:col-span-2">
                    <span
                        class=" text-sm border uppercase font-bold rounded-full  w-fit px-2.5 py-1 bg-blue-600 text-white">
                        Maklumat Ahli
                    </span>
                </div>

                <div class="">
                    <label for="input-label" class="block text-sm font-medium mb-2">Nama Penuh</label>
                    <input type="text" id="input-label" name="FullName"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                </div>

                <div class="">
                    <label for="input-label" class="block text-sm font-medium mb-2">Email</label>
                    <input type="email" id="input-label" name="email"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                </div>

                <div class="">
                    <label for="input-label" class="block text-sm font-medium mb-2">No Kad Pengenalan</label>
                    <input type="text" id="input-label" name="IcNumber"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                </div>

                <div class="">
                    <label for="input-label" class="block text-sm font-medium mb-2">No Telefon</label>
                    <input type="text" id="input-label" name="NoTel"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                </div>

                <!-- Select -->
                <div class="md:col-span-2">
                    <label for="input-label" class="block text-sm font-medium mb-2">Persatuan</label>
                    <select name="Persatuan_ID"
                        data-hs-select='{
                        "hasSearch": true,
                        "searchPlaceholder": "Search...",
                        "searchClasses": "block w-full sm:text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-1 py-1.5 sm:py-2 px-3",
                        "searchWrapperClasses": "bg-white p-2 -mx-1 sticky top-0",
                        "placeholder": "Pilih Persatuan...",
                        "toggleTag": "<button type=\"button\" aria-expanded=\"false\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800 \" data-title></span></button>",
                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-hidden focus:ring-2 focus:ring-blue-500",
                        "dropdownClasses": "mt-2 max-h-72 pb-1 px-1 space-y-0.5 z-20 w-full bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300",
                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100",
                        "optionTemplate": "<div><div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div class=\"text-gray-800 \" data-title></div></div></div>",
                        "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                    }'
                        class="hidden">
                        <option value="">Choose</option>
                        <option value="AF"
                            data-hs-select-option='{
                        "icon": "<img class=\"inline-block size-4 rounded-full\" src=\"../assets/vendor/svg-country-flags/png100px/af.png\" alt=\"Afghanistan\" />"}'>
                            Afghanistan
                        </option>
                        <option value="AX"
                            data-hs-select-option='{
                        "icon": "<img class=\"inline-block size-4 rounded-full\" src=\"../assets/vendor/svg-country-flags/png100px/ax.png\" alt=\"Aland Islands\" />"}'>
                            Aland Islands
                        </option>
                        <option value="AL"
                            data-hs-select-option='{
                        "icon": "<img class=\"inline-block size-4 rounded-full\" src=\"../assets/vendor/svg-country-flags/png100px/al.png\" alt=\"Albania\" />"}'>
                            Albania
                        </option>
                        <option value="DZ"
                            data-hs-select-option='{
                        "icon": "<img class=\"inline-block size-4 rounded-full\" src=\"../assets/vendor/svg-country-flags/png100px/dz.png\" alt=\"Algeria\" />"}'>
                            Algeria
                        </option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <label for="input-label" class="block text-sm font-medium mb-2">Alamat 1</label>
                    <input type="text" id="input-label" name="Alamat1"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                </div>

                <div class="md:col-span-2">
                    <label for="input-label" class="block text-sm font-medium mb-2">Alamat 2</label>
                    <input type="text" id="input-label" name="Alamat2"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                </div>

                <div class="md:col-span-2">
                    <label for="input-label" class="block text-sm font-medium mb-2">Alamat 3</label>
                    <input type="text" id="input-label" name="Alamat3"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                </div>

                <div class="">
                    <label for="input-label" class="block text-sm font-medium mb-2">Poskod</label>
                    <input type="text" id="input-label" name="Poskod"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                </div>

                <div class="">
                    <label for="input-label" class="block text-sm font-medium mb-2">Bandar</label>
                    <input type="text" id="input-label" name="Bandar"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                </div>

                <div class="">
                    <label for="input-label" class="block text-sm font-medium mb-2">Negeri</label>
                    <input type="text" id="input-label" name="Negeri"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                </div>

                <div class="md:col-span-2 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-3 my-5">
                    <div class="md:col-span-2">
                        <span
                            class=" text-sm border uppercase font-bold rounded-full  w-fit px-2.5 py-1 bg-blue-600 text-white">
                            Maklumat Keluarga
                        </span>
                    </div>


                    <div class="md:col-span-2">
                        <label for="input-label" class="block text-sm font-medium mb-2">Nama Penjaga</label>
                        <input type="text" id="input-label" name="NamaPenjaga"
                            class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                    </div>

                    <div class="">
                        <label for="input-label" class="block text-sm font-medium mb-2">Hubungan</label>
                        <input type="text" id="input-label" name="Hubungan"
                            class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                    </div>

                    <div class="md:col-span-3">
                        <label for="input-label" class="block text-sm font-medium mb-2">No Telefon Penjaga</label>
                        <input type="text" id="input-label" name="NoTelPenjaga"
                            class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                    </div>


                </div>
                <div class=" md:col-span-2">
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Daftar</button>
                </div>
                <!-- End Select -->
            </form>

            <p class="mt-1 text-center text-sm text-gray-900">
                Anda mempunyai akaun ?
                <a href="/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Log masuk </a>
            </p>
        </div>
    </div>
@endsection
