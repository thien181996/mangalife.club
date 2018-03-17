<?php

namespace App\Http\Controllers\admin;


use App\Mailbox;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\NotificationRequest;

class NotificationController extends Controller
{
    public function listNotification()
    {
        $notis = Mailbox::paginate(10);

        return view('admin.notification.list',compact('notis'));
    }

    public function createNotification()
    {
        $users = User::all();
        return view('admin.notification.create',compact('users'));
    }

    public function storeNotification(NotificationRequest $rq)
    {
        foreach ($rq->user_id as $user)
        {
            $noti = new Mailbox();
            $noti->mailbox_type = 1;
            $noti->mailbox_content = $rq->mailbox_content;
            $noti->user_id = $user;
            $noti->created_by = $rq->user_login;
            $noti->save();
        }
        return redirect(route('panel.listNotification'));
    }

    public function deleteNotification($noti_id)
    {
        $noti = Mailbox::find($noti_id);
        if($noti)
        {
            $noti->delete();
        }
        return redirect(route('panel.listNotification'));
    }
}
