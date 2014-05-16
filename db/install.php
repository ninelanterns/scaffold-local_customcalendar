<?php


defined('MOODLE_INTERNAL') || die;

function xmldb_local_customcalendar_install() {
    global $CFG, $DB;

    $success = true;
    $dbman = $DB->get_manager();

    // if drupalcalendar table exists move the data to cusomcalendar
    if($dbman->table_exists('drupalcalendar')) {
        $events = $DB->get_records('drupalcalendar');
        foreach($events as $event) {
            if(! $DB->insert_record('customcalendar', $event)) {
                $success = false;
            }
        }
    }

    return $success;
}