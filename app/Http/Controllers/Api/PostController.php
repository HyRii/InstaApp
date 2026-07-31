<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::with(['user:id,name,username,avatar'])
            ->withCount(['likes', 'comments']) 
            ->latest()
            ->paginate(10);

        return response()->json($posts);
    }

   
    public function show(Post $post)
    {
        $post->load(['user', 'comments.user', 'likes']);

        return response()->json($post);
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'caption' => ['nullable', 'string', 'max:2200'],
            'image'   => ['required', 'image', 'max:4096'],
        ]);

        $path = $request->file('image')->store('posts', 'public');

        $post = $request->user()->posts()->create([
            'caption'    => $validated['caption'] ?? null,
            'image_path' => $path,
        ]);

        return response()->json($post, 201);
    }

    
    public function destroy(Request $request, Post $post)
    {
        $this->authorize('delete', $post); 

        Storage::disk('public')->delete($post->image_path);
        $post->delete();

        return response()->json(null, 204);
    }
}
