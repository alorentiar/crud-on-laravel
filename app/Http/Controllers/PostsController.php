<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index()
    {
        // dd(Post::all());
        $posts = Post::all();



        // return view('posts.index', compact('posts'));
        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function edit(Post $post){
        // dd($post);
        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    public function update(Post $post){
        // dd(request()->all());
        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);


        $post->update([
            'title' => request('title'),
            'content' => request('content'),
        ]);

        return redirect('/posts');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        // dd(request()->all());
        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title' => request('title'),
            'content' => request('content'),
        ]);

        return redirect('/posts');
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect('/posts');
    }
}
