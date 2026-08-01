@extends('layouts.app')

@section('content')
<div class="relative max-w-md mx-auto">

    {{-- Decorative accents --}}
    <div class="absolute -top-6 -left-6 w-16 h-16 rounded-full bg-sunshine-200 opacity-60 blur-2xl pointer-events-none"></div>
    <div class="absolute -bottom-8 -right-6 w-20 h-20 rounded-full bg-sky-200 opacity-50 blur-2xl pointer-events-none"></div>

    <div class="relative bg-white/80 backdrop-blur-lg rounded-[30px] shadow-xl border border-primary-100 p-8">
        <span class="inline-block px-4 py-1.5 rounded-full bg-primary-100 text-primary-500 text-xs font-medium mb-3">
            ✨ New Moments
        </span>
        <h2 class="title-font text-2xl text-primary-500 mb-1">What did you capture today?</h2>
        <p class="text-sm text-gray-400 mb-6">Every Moments Deserve to be a Story</p>

        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm text-primary-500 font-medium mb-1.5">📷 Photo</label>
                <input type="file" name="image" accept="image/*" required
                       class="w-full text-sm text-gray-500 border border-primary-100 rounded-2xl px-3 py-2.5 bg-primary-50/50 file:mr-3 file:py-1.5 file:px-4 file:rounded-full file:border-0 file:bg-primary-400 file:text-white file:text-sm file:font-medium hover:file:bg-primary-500 file:cursor-pointer cursor-pointer focus:outline-none focus:ring-2 focus:ring-primary-300">
                @error('image') <p class="text-coral-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm text-primary-500 font-medium mb-1.5">💭 Caption</label>
                <textarea name="caption" rows="3" placeholder="Tell About your Moment..."
                          class="w-full border border-primary-100 rounded-2xl px-4 py-3 text-sm bg-primary-50/50 focus:outline-none focus:ring-2 focus:ring-primary-300 placeholder:text-gray-400">{{ old('caption') }}</textarea>
            </div>

            <button type="submit"
                    class="w-full bg-gradient-to-r from-sunshine-400 to-coral-500 text-white rounded-full py-3 font-medium shadow-lg shadow-coral-200 hover:from-sunshine-500 hover:to-coral-600 hover:scale-[1.02] transition duration-300">
                Post it ☀️
            </button>
        </form>
    </div>
</div>
@endsection
