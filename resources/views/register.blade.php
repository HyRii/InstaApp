@extends('layouts.app')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center">
    <div class="w-full max-w-sm bg-white rounded-2xl shadow-lg shadow-purple-100 p-8">
        <h1 class="text-3xl font-bold text-center mb-1 bg-gradient-to-r from-pink-500 to-purple-600 bg-clip-text text-transparent">
            InstaApp
        </h1>
        <p class="text-center text-gray-400 text-sm mb-6">Buat akun baru</p>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Nama lengkap"
                       class="w-full border border-gray-200 rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-400">
                @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <input type="text" name="username" value="{{ old('username') }}" placeholder="Username"
                       class="w-full border border-gray-200 rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-400">
                @error('username') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                       class="w-full border border-gray-200 rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-400">
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <input type="password" name="password" placeholder="Password"
                       class="w-full border border-gray-200 rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-400">
                @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <input type="password" name="password_confirmation" placeholder="Konfirmasi password"
                       class="w-full border border-gray-200 rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-400">
            </div>

            <button type="submit"
                    class="w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white rounded-xl py-2.5 font-medium hover:opacity-90 transition">
                Daftar
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-purple-600 font-medium">Login</a>
        </p>
    </div>
</div>
@endsection
