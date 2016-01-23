<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>New Event</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: Lucian
 * Date: 23.01.2016
 * Time: 10:07
 */
echo '<a href="server/logout.php">Log out</a>';

?>

<form id="newevent" action="server/addevent.php" method='POST'>

    <table>
        <tr>
            <td><span style="color: white; ">Data:</span></td>
            <td><label>
                    <input type="date" name="date">
                </label></td>
        </tr>
        <tr>
            <td><span style="color: white; ">Ora:</span></td>
            <td><label>
                    <input type="time" name="time">
                </label></td>
        </tr>
        <tr>
            <td><span style="color: white; ">Descriere:</span></td>
            <td><label>
                    <textarea rows="4" cols="50" name="desc"></textarea>
                </label></td>
        </tr>
        <tr>
            <td colspan="2" align="right">
                <button type="submit" class="btn btn-success" name='submit'>Save</button>
            </td>
        </tr>
    </table>

</form>