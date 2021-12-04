@extends('layout.mainlayout')
 
@section('title', '質問投稿')
 
@include('layout.header')
 
@section('content')
<div class="text">
<h1 style="padding:20px"> 質問を投稿する</h1>
<form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  タイトル
  <p>
    <input type="text" name="title" value="{{ old('title') }}">
    @if ($errors->has('title'))
    <span>{{ $errors->first('title') }}</span>
    @endif
  </p>
  質問内容
  <p>
    <textarea name="content">{{ old('content') }}</textarea>
    @if ($errors->has('content'))
    <span>{{ $errors->first('content') }}</span>
    @endif
  </p>
  <p>
  　<input type="submit"value="投稿" class="btn btn-success btn-sm">
  <a class="btn btn-warning btn-sm" href="{{ url('/home') }}">キャンセル </a>
</form>
</div>
@endsection
 
@include('layout.footer')