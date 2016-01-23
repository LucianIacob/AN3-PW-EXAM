<?php
/**
 * Created by PhpStorm.
 * User: Lucian
 * Date: 23.01.2016
 * Time: 10:01
 */

ob_start();
session_start();

$current_file = $_SERVER['SCRIPT_NAME'];

ob_end_clean();