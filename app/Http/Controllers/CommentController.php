<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

use App\Cafe;

class CommentController extends Controller
{
   public function store(Request $request, $cafeId) {
      $this->validate($request, [
        'body' => 'required'
      ]);

      $comment = new Comment(['body' => $request->body]);
      $cafe = Post::findOrFail($cafeId);
      $cafe->comments()->save($comment);

      return redirect()
             ->action('PostsController@show', $cafe->id);
    }
}
