<?php
 
// ==== Control Vars =======
$strFromNumber = "+13473345340";
$strToNumber = "+16465731388";
$strMsg = "Hi from Twilio"; 
$aryResponse = array();
 

    // include the Twilio PHP library - download from 
    // http://www.twilio.com/docs/libraries/
    require_once ("inc/Services/Twilio.php");
 
    // set our AccountSid and AuthToken - from www.twilio.com/user/account
    $AccountSid = "AC030c146a257548c6e811ed307c02cbdc";
    $AuthToken = "65b24d71e1b4e8c14539ee0039c280a4";
 
    // ini a new Twilio Rest Client
    $objConnection = new Services_Twilio($AccountSid, $AuthToken);


    // Send a new outgoinging SMS by POSTing to the SMS resource */
    $bSuccess = $objConnection->account->sms_messages->create(
        
        $strFromNumber, 	// number we are sending From 
        $strToNumber,           // number we are sending To
        $strMsg			// the sms body
    );

		
    $aryResponse["SentMsg"] = $strMsg;
    $aryResponse["Success"] = true;
    
    
    echo json_encode($aryResponse);
