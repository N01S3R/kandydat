<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class ApiCommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        $atributes = $request->validate([
            'user_name' => 'required',
            'content' => 'required',
        ]);
        $comment = $post->comments()->create([
            'user_name' => $atributes['user_name'],
            'content' => $atributes['content']
        ]);
        return new CommentResource($comment);
    }
}
