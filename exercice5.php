<?php
echo '<table BORDER="1">';
    $sql =  'SELECT COUNT(country_code) AS quantite,country_code FROM `table 2` GROUP BY country_code' ;
    foreach  ($conn->query($sql) as $row) {
        print "<tr><th>" . $row['country_code'] . "</th>";
        print "<th>" .   $row['quantite'] . "</th></tr>";
    }
echo '</table>';
