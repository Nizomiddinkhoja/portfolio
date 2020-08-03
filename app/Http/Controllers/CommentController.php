<?php

namespace App\Http\Controllers;

use App\Comment;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $comment = new Comment;
        if (Auth::user()) {
            $comment->user_id = Auth::user()->id;
        } else {
            $comment->name = $request->get('name');
            $comment->email = $request->get('email');
        }
        $comment->text = $request->get('message');
        $comment->post_id = $request->get('post_id');
        $comment->save();

        return redirect()->back()->with('status', 'Ваш комментарий будет скоро добавлен!');


    }
}
