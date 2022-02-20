<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Resources\PostCollectionResource;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Models\Post;

class ApiPostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return new PostCollectionResource($posts);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atributes = $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        $post = Post::create([
            'user_id' => $atributes['user_id'],
            'title' => $atributes['title'],
            'content' => $atributes['content'],
        ]);

        return new PostResource($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return new PostResource($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json('Post has been deleted');
    }
}
