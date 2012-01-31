<?php

require('twilio-php/Services/Twilio.php');

/* Start Configs */

$sid = "A123.....";
$token = "29d6b9f.......";
$twilio_number = '4045550101';

/* End Configs */

# Get the Argvs
$phone  = $argv[1];
$msg    = $argv[2];
$msg    = str_replace('\n', "\n", $msg);


$client = new Services_Twilio($sid, $token);
try 
{
    $message = $client->account->sms_messages->create(
        $twilio_number, // From a valid Twilio number
        $phone, // Text this number
        $msg
    );    
} catch (Exception $ex)
{
    var_dump($ex);
}
