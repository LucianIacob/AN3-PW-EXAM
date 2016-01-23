/**
 * Created by Lucian on 23.01.2016.
 */

$(document).ready(function () {

    $(".get_events").click(function () {
        //noinspection JSUndeclaredVariable
        $date = $(this).text();
        $.getJSON("getevents.php", {date: $date}, renderForm);
    });

    function renderForm(data) {
        var trHTML = '';
        $.each(data, function (i, item) {
            $("#events").empty();
            trHTML += "<li>ID: " + item.id + "<br>Day: " + item.ev_day + "<br>Hour: " + item.ev_hour + "<br>Description: " + item.ev_desc + "</li>";
        });
        //noinspection JSCheckFunctionSignatures
        $('#events').append(trHTML);
    }

});