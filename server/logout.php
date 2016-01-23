<?php
/**
 * Created by PhpStorm.
 * User: Lucian
 * Date: 23.01.2016
 * Time: 9:42
 */

require 'core.inc.php';

session_destroy();
header('Location: ../index.php');