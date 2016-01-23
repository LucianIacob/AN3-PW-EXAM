<!DOCTYPE html>
<div id="container">
    <h3>Events Days</h3>
    <ul class="list-inline">

        <?php
        require 'connect.inc.php';

        $closest_day = strtotime(date('Y-m-d', PHP_INT_MAX));

        $query = "SELECT DISTINCT ev_date FROM events;";
        $result = $connection->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $date = $row["ev_date"];
                $beginOfDay = strtotime("midnight", time());
                if (strtotime($date) >= $beginOfDay and strtotime($date) < $closest_day) {
                    $closest_day = strtotime($date);
                }
                echo "<li><a class='get_events' href=\"#\">$date</a></li>";
            }
        }
        $day_to_show = date('Y-m-d', $closest_day);


        $query = "SELECT * FROM events WHERE ev_date = ?;";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("s", $day_to_show);
        $stmt->execute();
        $stmt->bind_result($id, $ev_date, $ev_hour, $ev_desc);
        echo "<ul id='events'>";
        while ($stmt->fetch()) {
            echo "<li>ID: " . $id . "<br>Day: " . $ev_date . "<br>Hour: " . $ev_hour . "<br>Description: " . $ev_desc . "</li>";
        }
        echo "</ul>";
        ?>

    </ul>
</div>