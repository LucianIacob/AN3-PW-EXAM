<?php
/**
 * Created by PhpStorm.
 * User: Lucian
 * Date: 23.01.2016
 * Time: 11:35
 */

$ev_date = $_GET["date"];

require 'server/connect.inc.php';

$sql = "SELECT * FROM events WHERE ev_date = ?;";

$stmt = $connection->prepare($sql);
$stmt->bind_param("s", $ev_date);
$stmt->execute();
$stmt->bind_result($id, $ev_date, $ev_hour, $ev_desc);

$events = array();

while ($stmt->fetch()) {
    $event = new StdClass();
    $event->id = $id;
    $event->ev_day = $ev_date;
    $event->ev_hour = $ev_hour;
    $event->ev_desc = $ev_desc;

    array_push($events, $event);
}

echo json_encode($events);

$stmt->close();