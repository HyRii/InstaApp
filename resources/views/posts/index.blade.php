@extends('layouts.app')

@section('content')
<div class="space-y-6">
    @forelse ($posts as $post)
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            {{-- Header --}}
            <div class="flex items-center justify-between px-4 py-3">
                <div class="flex items-center gap-2">
                    <div class="w-9 h-9 rounded-full bg-gradient-to-br from-pink-400 to-purple-500 flex items-center justify-center text-white text-sm font-semibold">
                        {{ strtoupper(substr($post->user->username, 0, 1)) }}
                    </div>
                    <span class="font-medium text-sm">{{ $post->user->username }}</span>
                </div>

                @can('delete', $post)
                    <form method="POST" action="{{ route('posts.destroy', $post) }}"
                          onsubmit="return confirm('Hapus post ini?')">
                        @csrf @method('DELETE')
                        <button class="text-gray-400 hover:text-red-500 text-sm">Delete</button>
                    </form>
                @endcan
            </div>

            {{-- Image --}}
            <img src="{{ $post->image_url }}" alt="post" class="w-full aspect-square object-cover">

            {{-- Like --}}
            <div class="px-4 pt-3 flex items-center gap-4">
                <form method="POST" action="{{ route('posts.like', $post) }}">
                    @csrf
                    <button class="text-2xl {{ $post->isLikedBy(auth()->user()) ? 'text-pink-500' : 'text-gray-400' }} hover:scale-110 transition">
                        {{ $post->isLikedBy(auth()->user()) ? '♥' : '♡' }}
                    </button>
                </form>
                <span class="text-sm text-gray-500">{{ $post->likes->count() }} Like</span>
            </div>

            {{-- Caption --}}
            @if ($post->caption)
                <p class="px-4 pt-2 text-sm">
                    <span class="font-medium">{{ $post->user->username }}</span>
                    {{ $post->caption }}
                </p>
            @endif

            {{-- Comment --}}
            <div class="px-4 pt-2 pb-1 space-y-1">
                @foreach ($post->comments as $comment)
                    <div class="flex items-center justify-between group">
                        <p class="text-sm">
                            <span class="font-medium">{{ $comment->user->username }}</span>
                            {{ $comment->body }}
                        </p>
                        @can('delete', $comment)
                            <form method="POST" action="{{ route('comments.destroy', $comment) }}">
                                @csrf @method('DELETE')
                                <button class="text-xs text-gray-300 hover:text-red-500 opacity-0 group-hover:opacity-100 transition">
                                    Delete
                                </button>
                            </form>
                        @endcan
                    </div>
                @endforeach
            </div>

            {{-- New Comment --}}
            <form method="POST" action="{{ route('comments.store', $post) }}" class="flex items-center gap-2 px-4 py-3 border-t border-gray-100">
                @csrf
                <input type="text" name="body" placeholder="Add Comment..." required
                       class="flex-1 text-sm focus:outline-none">
                <button class="text-purple-600 text-sm font-medium">Kirim</button>
            </form>
        </div>
    @empty
        <div class="text-center text-gray-400 py-20">
            No Post yet. Start Capture!
        </div>
    @endforelse

    {{ $posts->links() }}
</div>
@endsection
