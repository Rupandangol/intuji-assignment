<?php

define('DB_HOST','mysql');
define('DB_USERNAME','sail');
define('DB_PASSWORD','password');
define('DB_NAME','sail');

define('GOOGLE_CLIENT_ID','YOUR_ACTUAL_CLIENT_ID');
define('GOOGLE_CLIENT_SECRET','YOUR_ACTUAL_CLIENT_SECRET');
define('GOOGLE_OAUTH_SCOPE','https://www.googleapis.com/auth/calender');
define('REDIRECT_URI','localhost/google_calender_event_sync.php');


 
// Start session 
if(!session_id()) session_start(); 
 
// Google OAuth URL 
$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=' . GOOGLE_CLIENT_ID . '&access_type=online'; 