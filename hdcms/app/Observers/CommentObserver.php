<?php

namespace App\Observers;

use App\Models\Comment;
use App\Notifications\CommentNotification;

class CommentObserver
{
    public function created(Comment $comment)
    {
        $comment->belongModel->user->notify(new CommentNotification($comment));
    }

    public function updated(Comment $comment)
    {
        //
    }

    public function deleted(Comment $comment)
    {
        //
    }

    public function restored(Comment $comment)
    {
        //
    }

    /**
     * Handle the comment "force deleted" event.
     *
     * @param  \App\Models\Comment $comment
     * @return void
     */
    public function forceDeleted(Comment $comment)
    {
        //
    }
}
