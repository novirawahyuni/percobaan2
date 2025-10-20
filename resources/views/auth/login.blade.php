@extends('layouts.app')

@section('title', 'Login Pelanggan')

@section('content')
    <main>
        <section class="bg-slate-100 py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-lg mx-auto bg-white rounded-xl shadow-xl overflow-hidden p-8">

                    <div class="text-center mb-8">
                        <h1 class="text-3xl font-bold text-slate-800">Selamat Datang Kembali</h1>
                        <p class="text-slate-500 mt-2">Login untuk mengakses riwayat booking Anda.</p>
                    </div>

                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600 bg-green-50 p-3 rounded-lg">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="space-y-6">
                            <!-- Email Address -->
                            <div>
                                <label for="email" class="block font-medium text-sm text-gray-700 mb-1">Email</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <i data-lucide="mail" class="w-5 h-5 text-slate-400"></i>
                                    </span>
                                    <input id="email"
                                        class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                        type="email" name="email" value="{{ old('email') }}" required autofocus />
                                </div>
                                @error('email')
                                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div>
                                <label for="password" class="block font-medium text-sm text-gray-700 mb-1">Password</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <i data-lucide="lock" class="w-5 h-5 text-slate-400"></i>
                                    </span>
                                    <input id="password"
                                        class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                        type="password" name="password" required />
                                </div>
                            </div>

                            <!-- Remember Me -->
                            <div class="flex items-center justify-between">
                                <label for="remember" class="inline-flex items-center">
                                    <input id="remember" type="checkbox"
                                        class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500"
                                        name="remember">
                                    <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
                                </label>
                            </div>
                        </div>

                        <div class="mt-8">
                            <button type="submit"
                                class="w-full inline-flex items-center justify-center px-6 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-blue-700 transition ease-in-out duration-150 shadow-lg hover:shadow-xl">
                                Login
                            </button>
                        </div>

                        <div class="text-center mt-6">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                                Belum punya akun? Daftar sekarang
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
