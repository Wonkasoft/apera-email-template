<?php

$url    = 'https://rockstarconference.name/bigbluebutton/api/';
$parms  = 'isMeetingRunningmeetingID=meeting-8535';
$secret = 'e113740c8a34d84a586036a2e06ac90b';

$urltohash = $parms . $secret;

$hashedurl = hash( 'sha256', $urltohash );

echo $hashedurl . '<br />';

echo 'https://rockstarconference.name/bigbluebutton/api/isMeetingRunning?meetingID=random-4190308&checksum=752b8b572e6bde645257b34c2380498d5db88f6bb42ca6b069572bf7f81787a7';


// https://rockstarconference.name/bigbluebutton/api/isMeetingRunning?meetingID=random-7735627&checksum=d9e738ce0fbd4e575738e632fc43f7e6559c57e3c1045f324c2d9b0c1cae186e

// https://rockstarconference.name/bigbluebutton/api/isMeetingRunning?meetingID=meeting-8535&checksum=5feceb66ffc86f38d952786c6d696c79c2dbc239dd4e91b46729d73a27fb57e9


