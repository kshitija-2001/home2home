<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('866501439085-pquv0g2dbgls7rp6d0avq6fkd9451urv.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/dashboard/home2home/userhome.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>