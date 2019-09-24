<?php
echo '<table BORDER="1">';
    $sql =  'SELECT id, email FROM `table 2` WHERE email LIKE "%google%" ';
    foreach  ($conn->query($sql) as $row) {
        print "<tr><th>" . $row['id'] . "</th>";
        print "<th>" .  $row['id'] . "</th>";
        print "<th>" .   $row['email'] . "</th></tr>";
    }
echo '</table>';
