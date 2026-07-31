<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request, Post $post) //Liked
    {
        $like = Like::firstOrCreate([
            'post_id' => $post->id,
            'user_id' => $request->user()->id,
        ]);

        return response()->json([
            'liked'       => true,
            'likes_count' => $post->likes()->count(),
        ], 201);
    }

    public function destroy(Request $request, Post $post) //Unlike
    {
        Like::where('post_id', $post->id)
            ->where('user_id', $request->user()->id)
            ->delete();

        return response()->json([
            'liked'       => false,
            'likes_count' => $post->likes()->count(),
        ]);
    }
}