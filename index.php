<?php
    
    require_once('twilio-php-master/Services/Twilio.php'); // Loads the library
    $version = "2010-04-01"
    $sid = "AC030c146a257548c6e811ed307c02cbdc"; // Your Account SID from www.twilio.com/console
    $token = "65b24d71e1b4e8c14539ee0039c280a4"; // Your Auth Token from www.twilio.com/console

    $client = new Services_Twilio($AccountSid, $AuthToken, $version); //initialise the Twilio client
    try{
        $message = $client->account->messages->create(array(
        "From" => "+13473345340",
        "To" => "+16465731388",
        "Body" => "Test message!",
        ));

        // Display a confirmation message on the screen
        echo "Sent message";
    }catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
?>