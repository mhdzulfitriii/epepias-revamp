@extends('layouts.user-onboard')

@section('content')

    <div class="dark:bg-slate-900 bg-gray-100 min-h-screen flex justify-center items-center">

        <div class="w-full max-w-md p-6">

            <div class="text-center">
                <img src="{{ asset('PEPIAS.png') }}" alt="Logo" class="mx-auto mb-6" style="max-width: 120px;">
            </div>

            <div class="bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">

                <div class="p-6 sm:p-7">
                    
                    <x-message />

                    <div class="text-center">
                        <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Admin E-PEPIAS</h1>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                            Log Masuk
                        </p>
                    </div>

                    <div class="mt-5">
                        <!-- Form -->
                        <form method="POST" action="{{ route('login.admin.perform') }}">
                            @csrf
                            <div class="space-y-4">
                                <!-- Email Input -->
                                <div>
                                    <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
                                    <input type="email" id="email" name="email"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        required>
                                </div>

                                <!-- Password Input -->
                                <div>
                                    <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                                    <input type="password" id="password" name="password"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        required>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit"
                                    class="w-full py-3 px-4 text-sm font-semibold rounded-lg bg-blue-600 text-white hover:bg-blue-700">
                                    Sign in
                                </button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
