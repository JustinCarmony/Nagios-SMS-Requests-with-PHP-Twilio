<?php

require('twilio-php/Services/Twilio.php');

# Get the Argvs
$phone  = $argv[1];
$msg    = $argv[2];
$msg    = str_replace('\n', "\n", $msg);

$sid = "A123.....";
$token = "29d6b9f.......";

$client = new Services_Twilio($sid, $token);
try 
{
    $message = $client->account->sms_messages->create(
        '8015553411', // From a valid Twilio number
        $phone, // Text this number
        $msg
    );    
} catch (Exception $ex)
{
    var_dump($ex);
}
