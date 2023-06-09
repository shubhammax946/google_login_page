
<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('61490277463-3eka5i77at4n7jiag1hi7f5ep2i1ruv1.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/google/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 