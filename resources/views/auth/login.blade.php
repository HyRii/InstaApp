@extends('layouts.app')

@section('content')
<div class="relative min-h-[80vh] flex items-center justify-center">

    {{-- Decorative floating elements --}}
    <div class="hidden md:block absolute top-10 left-10 rotate-12 opacity-70">
        <div class="relative">
            <div class="bg-primary-300 w-14 h-14 rounded-full blur-xl"></div>
            <div class="absolute top-3 left-3 text-4xl">📸</div>
        </div>
    </div>
    <div class="hidden md:block absolute bottom-16 right-14">
        <div class="bg-white rounded-full w-20 h-20 shadow-xl flex items-center justify-center text-3xl">☀️</div>
    </div>
    <div class="hidden md:block absolute top-24 right-24 text-sunshine-500 text-4xl animate-pulse">✦</div>
    <div class="hidden md:block absolute bottom-28 left-24 text-sky-500 text-3xl animate-pulse">✧</div>

    <div class="relative w-full max-w-sm bg-white/80 backdrop-blur-lg rounded-[32px] shadow-2xl shadow-primary-100 border border-primary-100 p-8">
        <div class="text-center mb-2">
            <h1 class="title-font text-4xl text-primary-500">CaptureIt</h1>
            <p class="text-xs text-primary-400 tracking-widest mt-1">CAPTURE • SHARE • REMEMBER</p>
        </div>
        <p class="text-center text-gray-400 text-sm mt-4 mb-6"> Continue your Adventure ☀️</p>

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                       class="w-full border border-primary-100 rounded-2xl px-4 py-2.5 bg-primary-50/50 focus:outline-none focus:ring-2 focus:ring-primary-300 placeholder:text-gray-400 text-sm">
                @error('email') <p class="text-coral-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <input type="password" name="password" placeholder="Password"
                       class="w-full border border-primary-100 rounded-2xl px-4 py-2.5 bg-primary-50/50 focus:outline-none focus:ring-2 focus:ring-primary-300 placeholder:text-gray-400 text-sm">
            </div>

            <label class="flex items-center gap-2 text-sm text-gray-500">
                <input type="checkbox" name="remember" class="rounded text-primary-500 focus:ring-primary-300"> Remember Me
            </label>

            <button type="submit"
                    class="w-full bg-gradient-to-r from-sunshine-400 to-coral-500 text-white rounded-full py-3 font-medium shadow-lg shadow-coral-200 hover:from-sunshine-500 hover:to-coral-600 hover:scale-[1.02] transition duration-300">
                Login
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            Not have account yet?
            <a href="{{ route('register') }}" class="text-primary-500 font-semibold hover:text-primary-600">Register</a>
        </p>
    </div>
</div>
@endsection
