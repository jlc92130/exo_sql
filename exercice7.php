<?php
echo '<table BORDER="1">';
    $sql =  'SELECT gender, COUNT(*) AS total FROM `table 2` GROUP BY gender' ;
    foreach  ($conn->query($sql) as $row) {
        print "<tr><th>" . $row['gender'] . "</th>";
        print "<th>" .   $row['total'] . "</th></tr>";
    }
echo '</table>';
