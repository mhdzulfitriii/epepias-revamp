<x-guest-layout>

    <div class="">
        <div class="max-w-[85rem] mx-auto my-6 lg:mb-14 text-center">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Daftar MyProgram PEPIAS</h2>
            {{-- <p class="mt-1 text-gray-600 dark:text-gray-400">Program terkini PKPIM</p> --}}
        </div>

        <div class="">

        </div>
        <div
            class="lg:flex md:flex-col border p-5 max-sm:mx-5 bg-white rounded-xl shadow-2xl md:mx-auto   mt-5 max-w-4xl max-sm:px-3 mb-10">

            <x-message />


            <div class="w-full md:mr-10 lg:px-5">
                <form
                    action="{{ route('guest.daftar.program.perform', ['id' => $program->id, 'slug' => $program->Slug]) }}"
                    method="POST">
                    @csrf

                    <div>
                        <input type="hidden" name="Program_ID" value="{{ $program->id }}">
                        <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Nama
                            Program</label>
                        <input type="text" id="input-label" name="NamaProgram" value="{{ $program->NamaProgram }}"
                            readonly
                            class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                    </div>

                    <div class="mt-4">
                        <label for="Tempat" class="text-sm text-gray-700 block mb-1 font-medium">Nama Penuh</label>
                        <input type="text" id="input-label" name="NamaPenuh" value="{{ old('NamaPenuh') }}"
                            class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                    </div>

                    <div class="mt-4 grid lg:grid-cols-2 gap-4">

                        <div>
                            <label for="NoIC" class="text-sm text-gray-700 block mb-1 font-medium">No kad
                                Pengenalan</label>

                            <input type="number" id="NoIC" name="NoIC" value="{{ old('NoIC') }}"
                                oninput="limitInputLength(this)" placeholder="tanpa (-)"
                                class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">

                            {{-- <input name="NoIc" id="NoIc" type="number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="tanpa (-)" oninput="limitInputLength(this)"> --}}
                        </div>

                        <script>
                            function limitInputLength(input) {
                                if (input.value.length > 12) {
                                    input.value = input.value.slice(0, 12);
                                }
                            }
                        </script>


                        <div>
                            <label for="Tempat" class="text-sm text-gray-700 block mb-1 font-medium">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        </div>

                        <div class="">
                            <x-persatuan-search name="Persatuan" />
                        </div>

                        <div>
                            <label for="NoPhone" class="text-sm text-gray-700 block mb-1 font-medium">Nombor
                                Telefon</label>
                            <input type="tel" id="NoPhone" name="NoPhone" value="{{ old('NoPhone') }}"
                                class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        </div>

                        <div>
                            <label for="NoPhonePenjaga" class="text-sm text-gray-700 block mb-1 font-medium">Nombor
                                Telefon
                                Penjaga</label>
                            <input type="tel" id="NoPhonePenjaga" name="NoPhonePenjaga"
                                value="{{ old('NoPhonePenjaga') }}"
                                class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        </div>

                        <div>
                            <label for="Alahan" class="text-sm text-gray-700 block mb-1 font-medium">
                                Alahan
                            </label>                            

                                <input type="text" id="Alahan" name="Alahan"
                                value="{{ old('Alahan') }}"
                                class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        </div>

                        @if ($program->Mode == 'Penggerak')
                            <div>
                                <label for="jawatan" class="text-sm text-gray-700 block mb-1 font-medium">
                                    Jawatan
                                </label>                            
                                    <input type="text" id="uppercase" name="uppercase"
                                value="{{ old('uppercase') }}"
                                class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                            </div>
                        @endif

                    </div>

                    <div class=" space-y-4">
                        <div class="mt-4">
                            <label for="Tempat" class="text-sm text-gray-700 block mb-1 font-medium">Alamat</label>
                            <textarea name="Alamat" rows="3" id="address"
                                class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder=""></textarea>
                        </div>

                        <button type="submit"
                            class="text-green-700 w-full hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-500 dark:focus:ring-green-800">Daftar
                            Segera !
                        </button>
                    </div>

                    <div
                        class="py-3 flex items-center text-sm text-gray-800 before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-white dark:before:border-neutral-600 dark:after:border-neutral-600">
                        Atau</div>

                    <div class="text-center text-sm ">
                        Daftar melalui <a href="#"
                            class=" text-blue-500 hover:text-blue-800 hover:font-bold">akaun
                            E-PEPIAS</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-guest-layout>
