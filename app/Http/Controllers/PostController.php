<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;

class PostController extends Controller
{
    public function index() //Show Feeds
    {
        $posts = Post::with(['user', 'comments.user', 'likes'])
            ->latest()
            ->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function create() //Upload Post
    {
        return view('posts.create');
    }

    public function store(Request $request) //Saved new post
    {
        $validated = $request->validate([
            'caption' => ['nullable', 'string', 'max:2000'],
            'image'   => ['required', 'image'], 
        ]);

        $path = $request->file('image')->store('posts', 'public'); //Path storage/app/public/posts

        /** @var \App\Models\User $user */
        $user = Auth::user();

        $user->posts()->create([
            'caption' => $validated['caption'] ?? null,
            'image_path' => $path,
        ]);
        return redirect()->route('posts.index')->with('status', 'Post berhasil dibuat!');
    }

    public function destroy(Post $post) //Delete Post
    {
        $this->authorize('delete', $post);

        Storage::disk('public')->delete($post->image_path);
        $post->delete();

        return back()->with('status', 'Post dihapus.');
    }

    public function toggleLike(Post $post) //Toggle like
    {
        $like = Like::where('post_id', $post->id)
            ->where('user_id', Auth::id())
            ->first();

        if ($like) {
            $like->delete();
        } else {
            Like::create([
                'post_id' => $post->id,
                'user_id' => Auth::id(),
            ]);
        }

        return back();
    }
    
    public function storeComment(Request $request, Post $post) //Comment on the post
    {
        $validated = $request->validate([
            'body' => ['required', 'string', 'max:1000'],
        ]);

        $post->comments()->create([
            'user_id' => Auth::id(),
            'body'    => $validated['body'],
        ]);

        return back();
    }

    public function destroyComment(Comment $comment) //Delete Comment
    {
        $this->authorize('delete', $comment);
        $comment->delete();

        return back();
    }

}
