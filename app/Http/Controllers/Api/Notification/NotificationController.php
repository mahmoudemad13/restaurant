<?php

namespace App\Http\Controllers\Api\Notification;

use App\Http\Controllers\Controller;

class NotificationController extends Controller {

    public function get($store_id)
    {
        $data = \DB::table("notifications")
            ->where("store_id",$store_id)
            ->where("user_id",auth("user")->id())
            ->get();

        return jsonResponse([
           "data" => $data
        ]);
    }

}
