<?php
 
require "Services/Twilio.php";
 
// set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "ACfa9d3aa2b574ea27f7dfe08ed571a455";
$AuthToken = "6d850ddb3b2140e73425a9c343aa69e5";
 
$client = new Services_Twilio($AccountSid, $AuthToken);
 
$sms = $client->account->sms_messages->create(
    "646-783-1693", // From this number
    "954-646-3439", // To this number
    "IT WORKED Test message!"
);
 
// Display a confirmation message on the screen
echo "Sent message {$sms->sid}";