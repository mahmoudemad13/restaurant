<?php

use Illuminate\Mail\Markdown;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use PHPMailer\PHPMailer\PHPMailer;

if (! function_exists('app_name')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function app_name()
    {
        return ' ';
        return config('app.name');
    }
}

if (! function_exists('gravatar')) {
    /**
     * Access the gravatar helper.
     */
    function gravatar()
    {
        return app('gravatar');
    }
}

if (! function_exists('home_route')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function home_route()
    {
        if (auth()->check()) {
            if (auth()->user()->can('view backend')) {
                return 'admin.dashboard';
            }

            return 'frontend.user.dashboard';
        }

        return 'frontend.index';
    }

}

if (!function_exists('sendSms')) {

    function sendSms($phone, $code)
    {
//        $client = new \GuzzleHttp\Client();
//        $response = $client->post(
//            "https://smsmisr.com/api/webapi/?Username=WOElf9sv&password=ILBCnsvbcO&language=2&sender=Smart Code&Mobile=$phone&message=$code"
//        );

//        return $response->getBody()->getContents();
    }
}

if (!function_exists('sendEmail')) {

    function sendEmail($data)
    {
        $markdown = new Markdown(view(), config('mail.markdown'));
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Host = "mail.mazaj-app.com";
        $mail->Port = 587;
        $mail->Username = "info@mazaj-app.com";
        $mail->Password = "KE)uA+?viHON";
        $mail->SetFrom('info@mazaj-app.com	', 'mazaj-app'); //from (verified email address)
        $mail->Subject = 'mazaj-app';
        $mail->MsgHTML($markdown->render('vendor.notifications.email', $data));
        $mail->AddAddress($data['to'], "");
        $mail->Send();
    }
}

if (!function_exists('jsonResponse')) {
    function jsonResponse($response, $status = 200)
    {
        return response()->json($response, $status, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }
}

