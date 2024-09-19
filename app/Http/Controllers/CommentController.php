<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'content' => 'required|string|max:1000',
        ]);
    
        Comment::create([
            'post_id' => $request->post_id,
            'user_id' => Auth::id(), // If you have user authentication
            'content' => $request->content,
        ]);
    
        return back()->with('success', 'Comment added!');
    }
    
}
