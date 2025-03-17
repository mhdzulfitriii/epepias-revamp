@extends('layouts.user-onboard')

@section('content')

<div class="min-h-screen flex items-center justify-center mx-10">

    <div class="">
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
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
    </div>
    <div
        class="mt-7 bg-white border max-w-xl mx-auto border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

        <img src="{{ asset('PKPIM2.png') }}" alt="" class="w-[110px] pt-6 mx-auto">

        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">OTP Verification</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                    Enter the 6-digit verification code sent to your email address.
                </p>
            </div>

            <div class="mt-5">
                <!-- Form -->
                <form id="otp-form" action="{{ route('otp.perform') }}" method="POST">
                    @csrf
                    <div class="grid gap-y-4">
                        <!-- OTP Input -->
                        <div>
                            <label for="otp" class="block text-sm mb-2 text-center dark:text-white">Verification
                                Code</label>
                            <input type="hidden" name="email" value="{{ $email }}">
                            <div class="flex justify-center gap-2">
                                <input type="text" id="otp" name="otp"
                                    class="w-[250px] text-center py-1 px-4 border-black rounded-lg text-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600"
                                    pattern="\d{6}" maxlength="6" required style="letter-spacing: 20px;" />
                            </div>
                            @if (session('error'))
                                <p class="text-xs text-red-600 mt-2 text-center">{{ session('error') }}</p>
                            @endif

                            @if (session('success'))
                                <p class="text-xs text-blue-600 mt-2 text-center">{{ session('success') }}</p>
                            @endif
                        </div>
                        <!-- End OTP Input -->

                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Verify
                            Code</button>
                    </div>
                </form>
                <!-- End Form -->

                <div class="text-sm text-gray-600 dark:text-neutral-400 mt-4">
                    <form action="{{route('otp.resend')}}" method="post">
                        @csrf

                        <input type="hidden" value="{{ $email }}" name="email">
                        Didn't receive the code? <button type="submit"
                            class="text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500">Resend</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection