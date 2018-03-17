<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;

class CommentController extends Controller
{
    //get all table comment
    public function listComment()
    {
        $comments = Comment::paginate(10);

        return view('admin.comment.list',compact('comments'));
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
