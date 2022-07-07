<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;

class PostController extends Controller
{
   
    public function index()
    {
        $posts=Post::all();
    return view('admin.posts.index', compact('posts'));
    }

   
    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Post::firstOrCreate($data);

        return redirect()->route('admin.post.index');
    }

  
    public function show(Post $post)
    {
       return view('admin.posts.show', compact('post'));
    }

   
    public function edit(Post $post)
  {
    
    return view('admin.posts.edit', compact('post'));
  }

   
  public function update(UpdateRequest $request, Post $post)
  {
      $data = $request->validated();
     $post->update($data);

      return view('admin.posts.show', compact('post'));
  }

   
  public function delete( Post $post)
  {
     
     $post->delete();

      return redirect()->route('admin.post.index');
  }
}
