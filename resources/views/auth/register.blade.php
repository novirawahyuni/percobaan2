@extends('layouts.auth')

@section('title', 'Registrasi Pelanggan')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block font-medium text-sm text-gray-700">Nama Lengkap</label>
            <input id="name" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="text" name="name" value="{{ old('name') }}" required autofocus />
             @error('name') <p class="text-sm text-red-600 mt-2">{{ $message }}</p> @enderror
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
            <input id="email" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="email" name="email" value="{{ old('email') }}" required />
            @error('email') <p class="text-sm text-red-600 mt-2">{{ $message }}</p> @enderror
        </div>

        <!-- Phone Number -->
        <div class="mt-4">
            <label for="phone" class="block font-medium text-sm text-gray-700">Nomor Telepon (WA)</label>
            <input id="phone" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="tel" name="phone" value="{{ old('phone') }}" required />
            @error('phone') <p class="text-sm text-red-600 mt-2">{{ $message }}</p> @enderror
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block font-medium text-sm text-gray-700">Password</label>
            <input id="password" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="password" name="password" required />
            @error('password') <p class="text-sm text-red-600 mt-2">{{ $message }}</p> @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation" class="block font-medium text-sm text-gray-700">Konfirmasi Password</label>
            <input id="password_confirmation" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="password" name="password_confirmation" required />
        </div>

        <div class="flex items-center justify-between mt-6">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                Sudah punya akun?
            </a>

            <button type="submit" class="ml-4 inline-flex items-center px-6 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-blue-700">
                Register
            </button>
        </div>
    </form>
@endsection

