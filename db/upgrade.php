<?php



function xmldb_local_customcalendar_upgrade($oldversion = 0) {
    global $DB;

    $dbman = $DB->get_manager();

//    if ($oldversion < 2013011109) {
//        // if drupalcalendar table exists move the data to cusomcalendar
//        if($dbman->table_exists('drupalcalendar')) {
//            if($DB->execute('DROP TABLE {drupalcalendar}')) {
//                return true;
//            }
//        } 
//    }
}