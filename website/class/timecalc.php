<?php

/**
 * Created by Daen Rebel & Pim Immink
 * User: Daen & Pim
 * Date: 10/11/2016
 * Time: 14:19
 */

function convertTime($dec) {
    $hour = floor($dec);
    $min = round(60*($dec - $hour));

    return $hour." uur en ".$min." minuten";
}

$weekday = date('N', strtotime(date("l")));

$time = [
    '1' => '09:00',
    '2' => '09:30',
    '3' => '10:00',
    '4' => '10:45',
    '5' => '11:15',
    '6' => '11:45',
    '7' => '12:15',
    '8' => '12:45',
    '9' => '13:15',
    '10' => '13:45',
    '11' => '14:15',
    '12' => '14:45',
    '13' => '15:30',
    '14' => '16.00',
    '15' => '16:30',
    '16' => '17:00',
];

if ($weekday > 0 && $weekday < 5) {

    $getclass = $_GET['class'];

    $xml = simplexml_load_file("http://u517056.gluweb.nl/getrooster/getrooster.php?class=" . $getclass . "&day=" . $weekday . "");

    $endtime = date($time[end($xml->weekday->hour)]);
    $nowtime = time();
    $timediff = strtotime($endtime);
    $timetill = convertTime(abs($nowtime - $timediff) / 60 / 60);

} else {

    $endtime = "VRIJ";
    $timetill = "VRIJ";

}
?>