<?php

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
Broadcast::channel('global-notif', function () {
    return true;
});
