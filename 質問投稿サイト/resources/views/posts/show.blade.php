@extends('layout.mainlayout')
 
@section('title', '詳細画面')
 
@include('layout.header')
 
@section('content')

<div style="padding:50px">
  <a href="{{ url('/home') }}" > ←戻る</a>
  <p>タイトル</p>
  {{ $post->title }}
<p>本文</p>
<p>{{ $post->content }}</p>
<h2>回答一覧</h2>
<ul>
  @forelse ($post->answers as $answer)
    <div style="padding:5px">
    <div style="box-shadow: 0 3px 7px #b8c4cc;">
    {{ $answer->answer }}
</div>
</div>
  <p>
    <form method="POST" action="{{ action('AnswersController@destroy', [$post, $answer]) }}" id="form_{{ $answer->id }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-warning btn-sm">削除</button>
    </form>
</p>
  @empty
  <li>まだ回答はありません。</li>
  @endforelse
</ul>
<form method="post" action="{{ action('AnswersController@store', $post) }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="answer">
    @if ($errors->has('answer'))
    <span>{{ $errors->first('answer') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="回答する" class="btn btn-success btn btn-sm">
  </p>
</form>
@endsection
 
@include('layout.footer')