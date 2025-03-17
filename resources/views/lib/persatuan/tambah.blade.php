<x-admin-layouts>
    <div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow-xs p-4 sm:p-7 border">
            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
                    Library Persatuan
                </h2>
                <p class="text-sm text-gray-600">
                    Tambah Library Persatuan.
                </p>

            </div>
            <x-message />
            <form
                action="{{ $persatuan->id ? route('admin.libpersatuan.kemaskini.perform', ['id' => $persatuan->id]) : route('admin.libpersatuan.tambah.perform') }}"
                method="post">
                @csrf

                @if ($persatuan->id)
                    @method('PUT')
                @endif
                <!-- Section -->
                <div class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                    <div class="grid grid-cols-12 gap-3">
                        @if ($persatuan->id)
                            <div class=" col-span-3">
                                <label for="input-label" class="block text-xs font-medium mb-2">Kod Persatuan</label>
                                <input type="text" id="input-label"
                                    value="{{ old('KodPersatuan', $persatuan->KodPersatuan) }}"
                                    class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                            </div>

                            <div class="col-span-9">
                                <label for="input-label" class="block text-xs font-medium mb-2">Nama Persatuan</label>
                                <input type="text" id="input-label" name="Persatuan"
                                    value="{{ old('Persatuan', $persatuan->Persatuan) }}"
                                    class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                            </div>
                        @else
                            <div class="col-span-12">
                                <label for="input-label" class="block text-xs font-medium mb-2">Nama Persatuan</label>
                                <input type="text" id="input-label" name="Persatuan"
                                    value="{{ old('Persatuan', $persatuan->Persatuan) }}"
                                    class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                            </div>
                        @endif

                        <div class="col-span-12">
                            <label for="input-label" class="block text-xs font-medium mb-2">Singkatan</label>
                            <input type="text" id="input-label" name="Singkatan"
                                value="{{ old('Singkatan', $persatuan->Singkatan) }}"
                                class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        </div>

                        <div class="col-span-12">
                            <label for="input-label" class="block text-xs font-medium mb-2">Nama Penerima Bank</label>
                            <input type="text" id="input-label" name="Nama"
                                value="{{ old('Nama', $persatuan->Nama) }}"
                                class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        </div>

                        <div class="col-span-12">
                            <!-- Select -->
                            <label for="input-label" class="block text-xs font-medium mb-2">Bank</label>

                            <select name="Bank"
                                data-hs-select='{
                                        "placeholder": "Pilih Bank...",
                                        "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-hidden focus:ring-2 focus:ring-blue-500",
                                        "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300",
                                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50",
                                        "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
                                        "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                    }'
                                class="hidden">
                                <option value="">Choose</option>
                                <option value="Maybank"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'Maybank' ? 'selected' : '' }}>Maybank
                                </option>
                                <option value="CIMB Bank"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'CIMB Bank' ? 'selected' : '' }}>CIMB Bank
                                </option>
                                <option value="Public Bank"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'Public Bank' ? 'selected' : '' }}>Public
                                    Bank</option>
                                <option value="RHB Bank"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'RHB Bank' ? 'selected' : '' }}>RHB Bank
                                </option>
                                <option value="Hong Leong Bank"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'Hong Leong Bank' ? 'selected' : '' }}>
                                    Hong Leong Bank</option>
                                <option value="AmBank"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'AmBank' ? 'selected' : '' }}>AmBank
                                </option>
                                <option value="Bank Islam"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'Bank Islam' ? 'selected' : '' }}>Bank
                                    Islam</option>
                                <option value="Bank Rakyat"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'Bank Rakyat' ? 'selected' : '' }}>Bank
                                    Rakyat</option>
                                <option value="UOB Bank"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'UOB Bank' ? 'selected' : '' }}>UOB Bank
                                </option>
                                <option value="OCBC Bank"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'OCBC Bank' ? 'selected' : '' }}>OCBC
                                    Bank</option>
                                <option value="HSBC Bank"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'HSBC Bank' ? 'selected' : '' }}>HSBC
                                    Bank</option>
                                <option value="Standard Chartered Bank"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'Standard Chartered Bank' ? 'selected' : '' }}>
                                    Standard Chartered Bank</option>
                                <option value="Affin Bank"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'Affin Bank' ? 'selected' : '' }}>Affin
                                    Bank</option>
                                <option value="Bank Muamalat"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'Bank Muamalat' ? 'selected' : '' }}>Bank
                                    Muamalat</option>
                                <option value="Alliance Bank"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'Alliance Bank' ? 'selected' : '' }}>
                                    Alliance Bank</option>
                                <option value="CitiBank"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'CitiBank' ? 'selected' : '' }}>CitiBank
                                </option>
                                <option value="Bank Simpanan Nasional (BSN)"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'Bank Simpanan Nasional (BSN)' ? 'selected' : '' }}>
                                    Bank Simpanan Nasional (BSN)</option>
                                <option value="Agrobank"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'Agrobank' ? 'selected' : '' }}>Agrobank
                                </option>
                                <option value="EXIM Bank"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'EXIM Bank' ? 'selected' : '' }}>EXIM
                                    Bank</option>
                                <option value="MBSB Bank"
                                    {{ old('Bank', $persatuan->Bank ?? '') == 'MBSB Bank' ? 'selected' : '' }}>MBSB
                                    Bank</option>
                            </select>

                            <!-- End Select -->
                        </div>

                        <div class="col-span-12">
                            <label for="input-label" class="block text-xs font-medium mb-2">No Bank</label>
                            <input type="text" id="input-label" name="NoBank"
                                value="{{ old('NoBank', $persatuan->NoBank) }}"
                                class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        </div>
                    </div>

                </div>

                <div class="mt-5 flex justify-end gap-x-2">
                    <a type="button" href="{{ route('admin.libpersatuan.index') }}"
                        class="py-1.5 sm:py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                        Cancel
                    </a>
                    <button type="submit"
                        class="py-1.5 sm:py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Save changes
                    </button>
                </div>
            </form>


        </div>
        <!-- End Card -->
    </div>
</x-admin-layouts>
