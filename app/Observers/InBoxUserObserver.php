<?php

namespace App\Observers;

use App\Models\InBoxUser;
use App\Notifications\UserNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class InBoxUserObserver
{
    /**
     * Handle the InBoxUser "created" event.
     */
    public function created(InBoxUser $inBoxUser): void
    {
        $user = $inBoxUser->user;
        $message = [
            'subject'=>$inBoxUser->subject,
            'message'=>$inBoxUser->message
        ];
        Notification::send($user, new UserNotification($message));
    }

    /**
     * Handle the InBoxUser "updated" event.
     */
    public function updated(InBoxUser $inBoxUser): void
    {
        //
    }

    /**
     * Handle the InBoxUser "deleted" event.
     */
    public function deleted(InBoxUser $inBoxUser): void
    {
        //
    }

    /**
     * Handle the InBoxUser "restored" event.
     */
    public function restored(InBoxUser $inBoxUser): void
    {
        //
    }

    /**
     * Handle the InBoxUser "force deleted" event.
     */
    public function forceDeleted(InBoxUser $inBoxUser): void
    {
        //
    }
}
