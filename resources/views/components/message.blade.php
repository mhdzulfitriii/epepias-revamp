@if ($errors->any())
    <div class="">
        <ul>
            @foreach ($errors->all() as $error)
                <div class="max-w-[85rem] mx-auto">

                    <div>
                        <ul>
                            <li>
                                <div class="flex items-center p-4 mb-4 text-xs text-teal-800 rounded-lg bg-teal-50 dark:bg-gray-800 dark:text-teal-400"
                                    role="alert">
                                    {{-- <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg> --}}
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
