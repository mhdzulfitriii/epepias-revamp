@extends('layouts.user-onboard')

@section('content')

<body>
    <body class="dark:bg-slate-900 bg-gray-100 h-full items-center py-16">

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

        <main class="w-full max-w-xl mx-auto p-6 ">
            <div
                class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div class="p-4 sm:p-7">
                    <div class="text-center">
                        {{-- <img src="{{asset('PKPIM LOGO.png')}}" alt="" class="mx-auto w-20 h-fit"> --}}
                        <h1 class="block text-2xl font-bold text-gray-800 dark:text-white ">Informasi Akaun E-PEPIAS</h1>
                        {{-- <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                            Already have an account?
                            <a class="text-blue-600 decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                href="../examples/html/signin.html">
                                Sign in here
                            </a>
                        </p> --}}
                    </div>

                    <div class="mt-5">

                        <!-- Form -->
                        <form action="{{route('info-akaun.perform')}}" method="post">
                            @csrf
                            <div class="">


                                <label for="website-admin"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <div class="flex mb-3">
                                    <span
                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                                        </svg>
                                    </span>
                                    <input type="text" id="website-admin" value="{{$userEmail}}" disabled
                                        class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="elonmusk">
                                </div>

                                <!-- Strong Password -->
                                <div class="">
                                    <div class="mb-2 ">
                                        <div class=" w-full">
                                            <label for="website-admin"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata Laluan</label>
                                            <input type="password" id="hs-strong-password-with-indicator-and-hint" name="password"
                                                class="rounded-md bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Enter password">
                                                
                                            <div id="hs-strong-password"
                                                data-hs-strong-password='{
                                                    "target": "#hs-strong-password-with-indicator-and-hint",
                                                    "hints": "#hs-strong-password-hints",
                                                    "stripClasses": "hs-strong-password:opacity-100 hs-strong-password-accepted:bg-teal-500 h-2 flex-auto rounded-full bg-blue-500 opacity-50 mx-1"
                                                    }'
                                                class="flex mt-2 -mx-1">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="hs-strong-password-hints" class="mb-3">
                                        <div>
                                            <span class="text-sm text-gray-800 dark:text-gray-200">Level:</span>
                                            <span
                                                data-hs-strong-password-hints-weakness-text='["Empty", "Weak", "Medium", "Strong", "Very Strong", "Super Strong"]'
                                                class="text-sm font-semibold text-gray-800 dark:text-gray-200"></span>
                                        </div>

                                        <h4 class="my-2 text-sm font-semibold text-gray-800 dark:text-white">
                                            Your password must contain:
                                        </h4>

                                        <ul class="space-y-1 text-sm text-gray-500">
                                            <li data-hs-strong-password-hints-rule-text="min-length"
                                                class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
                                                <span class="hidden" data-check>
                                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <polyline points="20 6 9 17 4 12" />
                                                    </svg>
                                                </span>
                                                <span data-uncheck>
                                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M18 6 6 18" />
                                                        <path d="m6 6 12 12" />
                                                    </svg>
                                                </span>
                                                Minimum number of characters is 6.
                                            </li>
                                            <li data-hs-strong-password-hints-rule-text="lowercase"
                                                class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
                                                <span class="hidden" data-check>
                                                    <svg class="flex-shrink-0 size-4"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <polyline points="20 6 9 17 4 12" />
                                                    </svg>
                                                </span>
                                                <span data-uncheck>
                                                    <svg class="flex-shrink-0 size-4"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M18 6 6 18" />
                                                        <path d="m6 6 12 12" />
                                                    </svg>
                                                </span>
                                                Should contain lowercase.
                                            </li>
                                            <li data-hs-strong-password-hints-rule-text="uppercase"
                                                class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
                                                <span class="hidden" data-check>
                                                    <svg class="flex-shrink-0 size-4"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <polyline points="20 6 9 17 4 12" />
                                                    </svg>
                                                </span>
                                                <span data-uncheck>
                                                    <svg class="flex-shrink-0 size-4"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M18 6 6 18" />
                                                        <path d="m6 6 12 12" />
                                                    </svg>
                                                </span>
                                                Should contain uppercase.
                                            </li>
                                            <li data-hs-strong-password-hints-rule-text="numbers"
                                                class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
                                                <span class="hidden" data-check>
                                                    <svg class="flex-shrink-0 size-4"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <polyline points="20 6 9 17 4 12" />
                                                    </svg>
                                                </span>
                                                <span data-uncheck>
                                                    <svg class="flex-shrink-0 size-4"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M18 6 6 18" />
                                                        <path d="m6 6 12 12" />
                                                    </svg>
                                                </span>
                                                Should contain numbers.
                                            </li>
                                            <li data-hs-strong-password-hints-rule-text="special-characters"
                                                class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
                                                <span class="hidden" data-check>
                                                    <svg class="flex-shrink-0 size-4"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <polyline points="20 6 9 17 4 12" />
                                                    </svg>
                                                </span>
                                                <span data-uncheck>
                                                    <svg class="flex-shrink-0 size-4"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M18 6 6 18" />
                                                        <path d="m6 6 12 12" />
                                                    </svg>
                                                </span>
                                                Should contain special characters.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Strong Password -->

                                <!-- End Form Group -->

                                <div class="my-4">
                                    <!-- Checkbox -->

                                    <!-- End Checkbox -->

                                    <button type="submit"
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">

                                        Cipta Akaun</button>
                                </div>

                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </main>
    </body>

@endsection