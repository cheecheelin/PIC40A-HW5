#!/usr/local/bin/php -d display_errors=STDOUT
<?php
// begin this XHTML page
print('<?xml version="1.0" encoding="utf-8"?>');
print("\n");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">



<head>

    <?php
    echo "<title> Calendar </title>";
    echo "<link rel='stylesheet' type='text/css' href='calendar.css' />";
        ?>
</head>

<body>
    <?php

    echo "<div class='container'>";

    #set timezone and display heading
    date_default_timezone_set('America/Los_Angeles');
    echo "<h1> Bruin family schedule for " .date("l"). ", " . date("F")." ".date("d"). ", ". date("Y")." ".date("h:i")." ".date("a")."</h1>".PHP_EOL;
    #create table with headers
    echo "<table id='event_table'>".PHP_EOL;

    $rows= 13; $col= 3;
    $hr=date("H");

    echo"<tr> <th class='hr_td_'></th> <th class='table_header'>Joe</th><th class='table_header'>Joanna</th><th class='table_header'>Lil Cub</th> </tr>".PHP_EOL;

    for ($i=0; $i<$rows; $i++){
        if ($i%2==0)
            echo "<tr class='even_row'>".PHP_EOL;
        else if ($i%2!=0)
            echo"<tr class='odd_row'>".PHP_EOL;

        echo"<td class='hr_td'>";

        if ($hr<12){
            echo "$hr.00 am";
        }
        if ($hr==12)
        {
            echo "$hr.00 pm";
        }        else if ($hr==24){
            echo "12.00 am";
        }
        else if ($hr>12 && $hr<24){
            $new=$hr-12;
            echo "$new.00 pm";
        }
        else if ($hr==24){
            echo "12.00 am";
        }
        else if ($hr>24){
            $midnight= $hr-24;
            echo "$midnight.00 am";
        }
        $hr++;

        echo"</td>";
        echo "<td> </td>";
        echo "<td> </td>";
        echo "<td> </td>".PHP_EOL;


        echo"</tr>";
    }

    echo "</table>";

    echo "</div>";


    ?>

</body>
</html>