<?php

require_once __DIR__ . '/../auto_loader.php';
use ZEGO\ZegoServerAssistant;
use ZEGO\ZegoErrorCodes;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['UserID'])) {
        //
        // Basic authentication token generation example
        //
        
        // Please modify appID to your own appId, appid is a number
        // Example: 1234567890
        $appId = 1101904631;
        
        // Please modify serverSecret to your own serverSecret, serverSecret is a string
        // Example: 'fa94dd0f974cf2e293728a526b028271'
        $serverSecret = '3131e55d1d7505c2655a85258bce52df';
        
        // Please modify userId to the userId of your user, userId is a string
        $userId = $_POST['UserID'];
        
        // When generating a basic authentication token, the payload should be set to an empty string
        $payload = '';
        
        // 3600 is the expiration time of the token, in seconds
        $token = ZegoServerAssistant::generateToken04($appId, $userId, $serverSecret, 3600, $payload);
        print_r($token->token);
        if( $token->code == ZegoErrorCodes::success ){
          #...
        }
        
        //demo
        //3AAAAAGCKKT8AEGZvcmtpc2xieW4wdTI4cXcAoPBuvYE1pAu6k+I9aVF4ooQFkG60sNBVZd8quE2Y/lIgkr60HZT5nP1fUgYABO+wpdT7EOJi00k1oycbtpP3E4wsOgAU11gyPSkBVyJ3V4i2nma8v9IPuH5r9WOVSqsngwWDAlBVxjVO14cWyfGc3UDynsALk+qd9Rk8PVrhWTNWpqZxCsUDyk79omSC4wI4CY/wLmiM+AN+wcL9ohGUNbo=
    } else {
        echo "UserID not provided.";
    }
} else {
    echo "Invalid request method.";
}
?>