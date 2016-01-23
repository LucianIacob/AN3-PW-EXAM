<?php
/**
 * Created by PhpStorm.
 * User: Lucian
 * Date: 23.01.2016
 * Time: 9:39
 */

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'root';
$mysql_db = 'pw';

$connection = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

if ($connection->connect_error) {
    die($connection->connect_error);
}