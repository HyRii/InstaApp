@extends('layouts.app')

@section('content')

{{-- Feed header --}}
<div class="text-center mb-8">
    <span class="inline-block px-4 py-1.5 rounded-full bg-sunshine-100 text-sunshine-600 text-xs font-medium">
        🧭 Public Feed
    </span>
    <h1 class="title-font text-3xl text-primary-500 mt-3">Curious Moments, Shared</h1>
    <p class="text-sm text-gray-400 mt-1">Kumpulan momen publik dari sesama Curious Wanderer</p>
</div>

<div class="space-y-8">
    @forelse ($posts as $post)
        <div class="post-card bg-white/80 backdrop-blur-lg rounded-[28px] shadow-lg border border-primary-100 overflow-hidden hover:shadow-xl transition duration-300">
            {{-- Header --}}
            <div class="flex items-center justify-between px-5 py-3.5">
                <div class="flex items-center gap-2.5">
                    <div class="w-9 h-9 rounded-full bg-gradient-to-br from-coral-400 to-sunshine-400 flex items-center justify-center text-white text-sm font-semibold">
                        {{ strtoupper(substr($post->user->username, 0, 1)) }}
                    </div>
                    <span class="font-medium text-sm text-charcoal">{{ $post->user->username }}</span>
                </div>

                @can('delete', $post)
                    <form method="POST" action="{{ route('posts.destroy', $post) }}"
                          onsubmit="return confirm('Hapus post ini?')">
                        @csrf @method('DELETE')
                        <button class="text-gray-300 hover:text-coral-500 text-xs font-medium transition">Delete</button>
                    </form>
                @endcan
            </div>

            {{-- Image: dibatasi tingginya agar foto + caption muat dalam satu layar laptop --}}
            <img src="{{ $post->image_url }}" alt="post"
                 class="w-full h-[380px] object-cover">

            {{-- Like --}}
            <div class="px-5 pt-4 flex items-center gap-4">
                <form method="POST" action="{{ route('posts.like', $post) }}">
                    @csrf
                    <button class="text-2xl transition hover:scale-110 {{ $post->isLikedBy(auth()->user()) ? 'text-coral-500' : 'text-gray-300' }}">
                        {{ $post->isLikedBy(auth()->user()) ? '♥' : '♡' }}
                    </button>
                </form>
                <span class="text-xs text-gray-400 font-medium">{{ $post->likes->count() }} Like</span>
            </div>

            {{-- Caption --}}
            @if ($post->caption)
                <p class="px-5 pt-2 text-sm text-charcoal">
                    <span class="font-semibold text-primary-500">{{ $post->user->username }}</span>
                    {{ $post->caption }}
                </p>
            @endif

            {{-- Comment --}}
            <div class="px-5 pt-3 pb-1 space-y-1.5">
                @foreach ($post->comments as $comment)
                    <div class="flex items-center justify-between group">
                        <p class="text-sm text-charcoal/80">
                            <span class="font-semibold text-primary-500">{{ $comment->user->username }}</span>
                            {{ $comment->body }}
                        </p>
                        @can('delete', $comment)
                            <form method="POST" action="{{ route('comments.destroy', $comment) }}">
                                @csrf @method('DELETE')
                                <button class="text-xs text-gray-300 hover:text-coral-500 opacity-0 group-hover:opacity-100 transition">
                                    Delete
                                </button>
                            </form>
                        @endcan
                    </div>
                @endforeach
            </div>

            {{-- New Comment --}}
            <form method="POST" action="{{ route('comments.store', $post) }}" class="flex items-center gap-2 px-5 py-3.5 border-t border-primary-50 mt-1">
                @csrf
                <span class="text-sky-400">💬</span>
                <input type="text" name="body" placeholder="Tambahkan komentar..." required
                       class="flex-1 text-sm bg-transparent focus:outline-none placeholder:text-gray-400">
                <button class="text-primary-500 text-sm font-semibold hover:text-primary-600 transition">Kirim</button>
            </form>
        </div>
    @empty
        <div class="text-center py-24">
            <div class="text-6xl mb-4">🧭</div>
            <p class="text-primary-500 font-medium">Belum ada momen publik.</p>
            <p class="text-sm text-gray-400 mt-1">Jadilah yang pertama Capture hari ini!</p>
        </div>
    @endforelse

    <div class="flex justify-center pt-2">
        {{ $posts->links() }}
    </div>
</div>
@endsection
