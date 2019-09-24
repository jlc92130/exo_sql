<?php
    echo '<table BORDER="1">';
    $sql =  'SELECT id, country_code FROM `table 2` WHERE country_code LIKE "N%" ';
    foreach  ($conn->query($sql) as $row) {
        print "<tr><th>" . $row['id'] . "</th>";
        print "<th>" .   $row['country_code'] . "</th></tr>";
    }
echo '</table>';
