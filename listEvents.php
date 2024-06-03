<?php

if (!isset($_SESSION['access_token'])) {
    header('Location: index.php');
    exit();
}

$googleApi = new GoogleCalendarApi();

$access_token_sess = $_SESSION['google_access_token'];
if (!empty($access_token_sess)) {
    $access_token = $access_token_sess;
} else {
    $data = $GoogleCalendarApi->GetAccessToken(GOOGLE_CLIENT_ID, REDIRECT_URI, GOOGLE_CLIENT_SECRET, $_GET['code']);
    $access_token = $data['access_token'];
    $_SESSION['google_access_token'] = $access_token;
}


$calendarId = 'primary';
$events = $googleApi->ListEvents($calendarId, $access_token);

echo "<h1>Upcoming Events</h1>";
foreach ($events->getItems() as $event) {
    echo $event->getSummary() . " (" . $event->getStart()->getDateTime() . ")<br>";
}
