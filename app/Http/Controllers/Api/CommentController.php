<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post) //Add Comment
    {
        $validated = $request->validate([
            'body' => ['required', 'string', 'max:1000'],
        ]);

        $comment = $post->comments()->create([
            'user_id' => $request->user()->id,
            'body'    => $validated['body'],
        ]);

        $comment->load('user:id,name,username,avatar');

        return response()->json($comment, 201);
    }

    public function destroy(Request $request, Comment $comment) //Delete Comment
    {
        $this->authorize('delete', $comment); //PR Bikin Policy
        $comment->delete();

        return response()->json(null, 204);
    }
}
