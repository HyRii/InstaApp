@extends('layouts.app')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center">
    <div class="w-full max-w-sm bg-white rounded-2xl shadow-lg shadow-purple-100 p-8">
        <h1 class="text-3xl font-bold text-center mb-1 bg-gradient-to-r from-pink-500 to-purple-600 bg-clip-text text-transparent">
            InstaApp
        </h1>
        <p class="text-center text-gray-400 text-sm mb-6">Masuk ke akunmu</p>

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                       class="w-full border border-gray-200 rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-400">
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <input type="password" name="password" placeholder="Password"
                       class="w-full border border-gray-200 rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-400">
            </div>

            <label class="flex items-center gap-2 text-sm text-gray-500">
                <input type="checkbox" name="remember"> Ingat saya
            </label>

            <button type="submit"
                    class="w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white rounded-xl py-2.5 font-medium hover:opacity-90 transition">
                Login
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-purple-600 font-medium">Daftar</a>
        </p>
    </div>
</div>
@endsection
