@extends('layout.mainlayout')
 
@section('title', '質問編集ページ')
 
@include('layout.header')
 
@section('content')
<div class="text">
<h1 style="padding:30px">
  質問内容を編集する
</h1>
<form method="post" action="{{ url('/posts', $post->id) }}">
  {{ csrf_field() }}
  タイトル
  <p>
    <input type="text" name="title" value="{{ old('title', $post->title) }}">
    @if ($errors->has('title'))
    <span>{{ $errors->first('title') }}</span>
    @endif
  </p>
  質問内容
  <p>
    <textarea name="content">{{ old('content', $post->content) }}</textarea>
    @if ($errors->has('content'))
    <span>{{ $errors->first('content') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="変更" class="btn btn-success btn-sm">
    <a href="{{ url('/home') }}"> <button class="btn btn-warning btn-sm">戻る</button></a>
  </p>
</form>
</div>
@endsection
 
@include('layout.footer')