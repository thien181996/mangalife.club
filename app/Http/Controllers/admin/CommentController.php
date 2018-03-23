<?php

namespace App\Http\Controllers\admin;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;

class CommentController extends Controller
{
    //get all table comment
    public function listComment(Request $rq)
    {
        $users = User::all();
        $user_id = $rq->user_id;
        if($rq->user_id)
        {
            $comments = Comment::where('user_id',$user_id)->orderBy('created_at','desc')->paginate(10);
        } else {
            $comments = Comment::orderBy('created_at','desc')->paginate(10);
        }


        return view('admin.comment.list',compact('comments','users','user_id'));
    }
    //delete obj by id
    public function deleteComment($comment_id)
    {
        $comment = Comment::find($comment_id);
        if($comment)
        {
            $comment->delete();
        }

        return redirect(route('panel.listComment'));
    }
}
