<?php

namespace Tests\Unit;


use App\Models\InBoxUser;
use App\Models\User;
use App\Notifications\UserNotification;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class SendMessageToUserTest extends TestCase
{

    /**
     * @test
     */
    public function test_user_notification()
    {
        Notification::fake();

        $user = User::factory()->create();

        InBoxUser::factory()->create([
            'user_id' => $user->id,
        ]);
        Notification::assertSentTo([$user], UserNotification::class);
    }
}
