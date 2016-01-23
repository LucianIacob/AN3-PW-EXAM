<?php
/**
 * Created by PhpStorm.
 * User: Lucian
 * Date: 23.01.2016
 * Time: 10:23
 */

require 'connect.inc.php';

if (isset($_POST['date']) && isset($_POST['time']) && isset($_POST['desc'])) {
    $date = $_POST['date'];
    $time = $_POST['time'];
    $desc = $_POST['desc'];

    if (!empty($date) && !empty($time) && !empty($desc)) {

        $query = "INSERT into events (id, ev_date, ev_hour, ev_desc) VALUE (id, ?, ?, ?);";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("sss", $date, $time, $desc);
        $stmt->execute();
        $stmt->close();
        header('Location: ../adminpage.php');
    } else {
        echo 'You have to fill all fields';
    }
}

