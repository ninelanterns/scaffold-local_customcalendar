<?php


// custom calendar event types
define('CUSTOMCALENDAR_CHOOSETYPE', 'choose_type' );
define('CUSTOMCALENDAR_EDUCATION',  'education_session');
define('CUSTOMCALENDAR_MEETING',    'meetings_conferences');

// the mapping of event types to language strings
global $CUSTOMCALENDAR_EVENT_TYPES;
$CUSTOMCALENDAR_EVENT_TYPES = array(
    CUSTOMCALENDAR_CHOOSETYPE => get_string('choosetype', 'local_customcalendar'),
    CUSTOMCALENDAR_EDUCATION  => get_string('educationsession', 'local_customcalendar'),
    CUSTOMCALENDAR_MEETING    => get_string('meetingsconferences', 'local_customcalendar'),
);