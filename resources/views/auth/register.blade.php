@extends('layouts.app')

@section('title', 'Registrasi Pelanggan')

@section('content')
    <main>
        <section class="bg-slate-100 py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-lg mx-auto bg-white rounded-xl shadow-xl overflow-hidden p-8">
                    <div class="text-center mb-8">
                        <h1 class="text-3xl font-bold text-slate-800">Buat Akun Baru</h1>
                        <p class="text-slate-500 mt-2">Daftar untuk mempermudah proses booking Anda di masa mendatang.</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="space-y-5">
                            <!-- Name -->
                            <div>
                                <label for="name" class="block font-medium text-sm text-gray-700 mb-1">Nama
                                    Lengkap</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <i data-lucide="user" class="w-5 h-5 text-slate-400"></i>
                                    </span>
                                    <input id="name"
                                        class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm"
                                        type="text" name="name" value="{{ old('name') }}" required autofocus />
                                </div>
                                @error('name')
                                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email Address -->
                            <div>
                                <label for="email" class="block font-medium text-sm text-gray-700 mb-1">Email</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <i data-lucide="mail" class="w-5 h-5 text-slate-400"></i>
                                    </span>
                                    <input id="email"
                                        class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm"
                                        type="email" name="email" value="{{ old('email') }}" required />
                                </div>
                                @error('email')
                                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Phone Number -->
                            <div>
                                <label for="phone" class="block font-medium text-sm text-gray-700 mb-1">Nomor Telepon
                                    (WA)</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <i data-lucide="phone" class="w-5 h-5 text-slate-400"></i>
                                    </span>
                                    <input id="phone"
                                        class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm"
                                        type="tel" name="phone" value="{{ old('phone') }}" required />
                                </div>
                                @error('phone')
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
                                        class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm"
                                        type="password" name="password" required />
                                </div>
                                @error('password')
                                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div>
                                <label for="password_confirmation"
                                    class="block font-medium text-sm text-gray-700 mb-1">Konfirmasi Password</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <i data-lucide="lock" class="w-5 h-5 text-slate-400"></i>
                                    </span>
                                    <input id="password_confirmation"
                                        class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm"
                                        type="password" name="password_confirmation" required />
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <button type="submit"
                                class="w-full inline-flex items-center justify-center px-6 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-blue-700">
                                Daftar
                            </button>
                        </div>

                        <div class="text-center mt-6">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                Sudah punya akun? Login di sini
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
