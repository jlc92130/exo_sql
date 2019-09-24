<?php
echo '<table BORDER="1">';
    $sql =  'SELECT id, first_name, last_name,gender FROM `table 2` WHERE last_name = "palmer" ';
    foreach  ($conn->query($sql) as $row) {
        print "<tr><th>" . $row['id'] . "</th>";
        print "<th>" .  $row['first_name'] . "</th>";
        print "<th>" .   $row['last_name'] . "</th></tr>";
    }
echo '</table>';
