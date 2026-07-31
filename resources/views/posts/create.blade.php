@extends('layouts.app')

@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 max-w-md mx-auto">
    <h2 class="font-semibold text-lg mb-4">Buat Post Baru</h2>

    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm text-gray-500 mb-1">Image</label>
            <input type="file" name="image" accept="image/*" required
                   class="w-full text-sm border border-gray-200 rounded-xl px-3 py-2">
            @error('image') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-500 mb-1">Caption</label>
            <textarea name="caption" rows="3" placeholder="caption..."
                      class="w-full border border-gray-200 rounded-xl px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-purple-400">{{ old('caption') }}</textarea>
        </div>

        <button type="submit"
                class="w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white rounded-xl py-2.5 font-medium hover:opacity-90 transition">
            Post
        </button>
    </form>
</div>
@endsection
