<x-admin-layouts>
    <div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow-xs p-4 sm:p-7 border">
            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
                    MyProgram
                </h2>
                <p class="text-sm text-gray-600">
                    Tambah / Kemaskini Program PEPIAS.
                </p>

            </div>
            <x-message />
            <form
                action="{{ $program->id ? route('pusat.program.kemaskini.perform', ['id' => $program->id]) : route('pusat.program.tambah.perform') }}"
                method="post" enctype="multipart/form-data">
                @csrf

                @if ($program->id)
                    @method('PUT')
                @endif
                <!-- Section -->
                <div class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                    <div class="grid grid-cols-12 gap-3">
                        <div class="col-span-12 mb-5" id="image"
                            @if ($program->images->isEmpty()) style="display: none;" @endif>
                            <div class="mt-3 w-full rounded-lg">
                                @if ($program->images->isNotEmpty())
                                    <img id="imagePreview" src="{{ asset($program->images->first()->link) }}"
                                        alt="Preview"
                                        class="w-full h-[20rem] border rounded-lg shadow-md object-cover">
                                @else
                                    <img id="imagePreview" src="" alt="Preview"
                                        class="w-full h-[20rem] rounded-lg border shadow-md hidden object-cover">
                                @endif
                            </div>
                        </div>
                        <div class="col-span-12">
                            <label for="input-label" class="block text-xs font-medium mb-2">Nama program</label>
                            <input type="text" id="input-label" name="Title"
                                value="{{ old('Title', $program->Title) }}"
                                class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        </div>

                        <div class="col-span-12">
                            <label for="input-label" class="block text-xs font-medium mb-2">Diskripsi program</label>
                            <textarea id="textarea-label" name="Desc"
                                class="py-2 px-3 sm:py-3 sm:px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                rows="3">{{ old('Desc', $program->Desc) }}</textarea>

                        </div>

                        <div class="col-span-3">
                            <label for="input-label" class="block text-xs font-medium mb-2">Stok</label>
                            <input type="text" id="input-label" name="stock"
                                value="{{ old('stock', $program->stock) }}"
                                class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        </div>

                        <div class="col-span-3">
                            <label for="input-label" class="block text-xs font-medium mb-2">Harga (RM)</label>
                            <input type="text" id="input-label" name="price"
                                value="{{ old('price', $program->price) }}"
                                class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        </div>

                        {{-- <div class="col-span-12">
                            <!-- Select -->
                            <label for="input-label" class="block text-xs font-medium mb-2">Persatuan</label>

                            <select name="Persatuan_ID"
                                data-hs-select='{
                                        "placeholder": "Pilih Persatuan...",
                                        "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-hidden focus:ring-2 focus:ring-blue-500",
                                        "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300",
                                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50",
                                        "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
                                        "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                    }'
                                class="hidden">
                                <option value="">Choose</option>
                                @foreach ($persatuan as $item)
                                    <option value="{{ $item->KodPersatuan }}"
                                        {{ old('Persatuan_ID', $program->Persatuan_ID ?? '') == $item->KodPersatuan ? 'selected' : '' }}>
                                        {{ $item->Persatuan }}
                                    </option>
                                @endforeach
                            </select>
                        </div> --}}

                        <div class="col-span-12">
                            <label for="gambar_program" class="block text-xs font-medium mb-2">Gambar Program</label>
                            <input id="gambar_program" name="image" onchange="previewImage(event)" accept="image/*"
                                type="file"
                                class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none
                                file:bg-gray-50 file:border-0 file:me-4 file:py-3 file:px-4">
                        </div>
                    </div>

                </div>

                <div class="mt-5 flex justify-end gap-x-2">
                    <a type="button" href="{{ route('pusat.program.index') }}"
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

    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const imgContainer = document.getElementById('image');
                const img = document.getElementById('imagePreview');

                img.src = reader.result;
                img.classList.remove('hidden');
                imgContainer.style.display = 'block'; // Show div when image is selected
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</x-admin-layouts>
