<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(){
        $post = new Post();
        $post = $post->all();
        return view('posts.index', ['posts' => $post]);
    }

    public function create(){
        return view('posts.create');
    }

    public function show(Post $post){
        return view('posts.view', compact('post'));
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'user_id'=>'required|numeric'
        ]);

        Post::create($request->all());
        return redirect()->route('posts.index')->with('success', 'Post
created successfully.');
    }

    public function edit(Post $post){

        return view('posts.edit', $post, compact('post'));
    }

    public function update(Request $request, Post $post){
        $post->update($request->all());
        return redirect('posts.index');
    }

    public function delete(Post $post){
        $post->delete();
        return redirect()->route('posts.index');
    }
}
