@extends('layouts.app')
@section('title', '質問投稿サイト')
 
@include('layout.header')
 
@section('content')
<div class="text">
<h1> 質問一覧</h1>
<a href="{{ url('/new') }}">質問を投稿する</a>
</div>
  @forelse ($posts as $post)
  <div class="card">
  <table class="table table-striped">
    <tbody>
        <tr>
	  <td> タイトル
      <p> <a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a></p>
    本文
    <p>{{ $post->content }} </p>
    <div style="text-align: right">
    <p><span>回答：{{ $post->answers->count() }}件</span></p>
    @if ($post->user_id == Auth::id())
    <a href="{{ action('PostsController@edit', $post) }}"> <button class="btn btn-success">編集</button></a>
    <form method="POST" action="{{ action('PostsController@destroy', $post->id) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-warning">削除</button>
    </form></td>
    @endif
</tr>
</tbody>
   </table>
</div>
  @empty
  <li>まだ質問はありません</li>
  @endforelse
</div>
@endsection
 
@include('layout.footer')