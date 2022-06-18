<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use Exception;

class Notifications extends Controller
{
    public function getnotif()
    {
        try {
            $notif = Notification::latest()->where('id_user_to', auth()->user()->id)->paginate(5);
           
            if ($notif) {
                return ResponseFormatter::success(
                    $notif,
                    'Data Notification retrieved successfully'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Empty Notification'
                );
            }
        } catch (Exception $e) {
            return ResponseFormatter::error(
                $e,
                'Error'
            );
        }
    }
}
