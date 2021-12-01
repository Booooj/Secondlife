@extends('layouts.app')
 
@section('title', '質問投稿サイト')
@include('layout.header')
 
@section('content')

<h1 class="text">
<div style="padding:70px">
  Q＆Aサイト
</div>
 <p>様々なことを質問しよう！！</p>
 <a href="{{ url('/home') }}">質問を新規投稿</a>
</h1>
@endsection
 
@include('layout.footer')