<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Exception;

class Test extends Controller
{
    public function test()
    {
        try {
            echo json_encode(array("dama" => "da"));
        } catch (Exception $e) {
            ResponseFormatter::error(
                $e,
                "su"
            );
        }
    }
}
