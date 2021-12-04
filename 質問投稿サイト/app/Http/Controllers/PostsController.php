<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Http\Requests\PostRequest; 
use Illuminate\Support\Facades\Auth;
 
class PostsController extends Controller
{
  
   public function __construct()
    {
    $this->middleware('auth');
    }

    public function index()
    {
      $posts = Post::orderBy('created_at', 'desc')->get();
      return view('posts.index', ['posts' => $posts]);
    }
    public function show(Post $post) {
        return view('posts.show')->with('post', $post);
      }
      public function new()
    {
      return view('posts.new');
    }
public function edit($id)
{
    $post = Post::findOrFail($id);
    return view('posts.edit', ['post' => $post]);
}

public function update(Request $request, Post $post) {
  $post->title = $request->title;
  $post->content = $request->content;
  $post->save();
  return redirect('/home');
}

public function store(PostRequest $request)
{
  $post = new Post();
  $post->user_id = Auth::id();
  $post->title = $request->title;
  $post->content = $request->content;
  $post->save();
    return redirect('/home')->with('flash', '質問を投稿しました');
}
public function destroy(Post $post) {
  $post->delete();
  return redirect('/home')->with('flash', '質問を削除しました');
}
}

