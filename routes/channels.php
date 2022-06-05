<?php

use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

// Broadcast::channel('App.Models.Comment.{id}', function ($comment, $id) {
//     return (int) $comment->id === (int) $id;
// });
Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    // return (int) $user->id === (int) $id;
    return $user->id === User::findOrNew($id)->user_id;
});

// Broadcast::channel('global-notif', function () {
//     return true;
// });
// https://laravel.com/docs/5.4/broadcasting#authorizing-channels
//https://stackoverflow.com/questions/43035079/send-pusher-notification-to-specific-user-laravel