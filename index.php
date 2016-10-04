<?php
    
    require_once('twilio-php-master/Services/Twilio.php'); // Loads the library
    
    $sid = "AC030c146a257548c6e811ed307c02cbdc"; // Your Account SID from www.twilio.com/console
    $token = "65b24d71e1b4e8c14539ee0039c280a4"; // Your Auth Token from www.twilio.com/console

    $client = new Services_Twilio($account_sid, $auth_token); 
 
    $client->account->messages->create(array( 
	   'To' => "+16465731388", 
	   'From' => "+13473345340", 
	   'Body' => "Hi from twilio"
    ));

print $message->sid;
?>