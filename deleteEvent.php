<?php

if (isset($_POST['event_id'])) {
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
    $eventId = $_POST['event_id'];
    $googleApi->DeleteCalendarEvent($eventId, $calendarId, $access_token);
    echo 'Event deleted.';
    exit();
}
echo 'No Event Id';
exit();
