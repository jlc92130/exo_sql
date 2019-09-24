<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="exercice_sql";

try {
  //connexion a la BDD
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    include("header.php");


    include("exercice".$_GET['id'].".php");

    


    // $sql =  'SELECT id, first_name, last_name,gender FROM `table 2` WHERE gender = "Female" ';
    // foreach  ($conn->query($sql) as $row) {
    //     print $row['id'] . "\t";
    //     print  $row['first_name'] . "\t";
    //     print $row['last_name'] . "\n<br>";
    // }


    // $sql =  'SELECT id, first_name, last_name,gender FROM `table 2` WHERE last_name = "palmer" ';
    // foreach  ($conn->query($sql) as $row) {
    //     print $row['id'] . "\t";
    //     print  $row['first_name'] . "\t";
    //     print $row['last_name'] . "\n<br>";
    // }

 //    //requete SQL
 //
 //
 //       // use exec() because no results are returned
 //
 //    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
 //      VALUES ('John', 'Doe', 'john@example.com')";
 //
 //
 //      // lancement de la requete et execution
 //      $stmt = $conn->prepare("SELECT id, first_name, last_name FROM `table 2` WHERE last_name='palmer'");
 //      $stmt->execute();
 //
 //      echo '<table>
 //      <tr><th>first_name<th><tr>
 //      <tr><th>last_name<th><tr>
 //      <tr><td>   </td></tr>
 //      <tr><td> </td></tr>
 //
 //
 //
 //      </table>'
 //
 //
 //
 //      while($row = $stmt->fetch()) {
 //        ;
 // }
 //
 //
 //      echo "<h2>" . $stmt . "</h2>";
 //
 //      $stmt = $conn->prepare("SELECT id, first_name, last_name,gender FROM `table 2` WHERE gender='Female'");
 //      $stmt->execute();
 //
 //      $stmt = $conn->prepare("SELECT id, country_code FROM `table 2` WHERE country_code LIKE 'N%');
 //      $stmt->execute();
 //
 //      $stmt = $conn->prepare("SELECT id, email FROM `table 2` WHERE email LIKE '%google%');
 //      $stmt->execute();
 //
 //      $stmt = $conn->prepare("SELECT COUNT(id),country_code FROM `table 2` GROUP BY country_code);
 //      $stmt->execute();
 //
 //
 //    //fin de mes requetes
 //

}


catch(PDOException $e)
    {
    echo  $e->getMessage();
    }

$conn = null;

 ?>
