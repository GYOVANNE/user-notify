<?php

namespace App\Observers;

use App\Models\InBoxUser;
use App\Notifications\UserNotification;
use Illuminate\Support\Facades\Notification;

class InBoxUserObserver
{
    /**
     * Handle the InBoxUser "created" event.
     */
    public function created(InBoxUser $inBoxUser): void
    {
        Notification::send($inBoxUser->user, new UserNotification($inBoxUser->toArray()));
    }
}
