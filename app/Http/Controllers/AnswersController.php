<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AnswerRequest; 
use App\Http\Controllers\Controller;
use App\Answer;
use App\Post;

class AnswersController extends Controller
{
    public function store(Request $request, Post $post) {
        $answer = new Answer(['answer' => $request->answer]);
        $post->answers()->save($answer);
        return redirect()->action('PostsController@show', $post);
      
    }
   
    public function destroy(Post $post,Answer $answer) {
        $answer->delete();
        return redirect()->action('PostsController@show', $post);
}
}