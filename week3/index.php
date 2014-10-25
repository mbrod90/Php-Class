<?php
                        // server, username, password, database
  $link = mysqli_connect('127.0.0.1','root','root','phpfall');

  if (mysqli_connect_errno()) {
    die('could not connect to the server' . mysqli_error());
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hello World</title>
</head>
<body>
    <?php

      if(isset($_GET['user_id'])) {
        $user_id = $_GET['user_id'];
      } else {
        die('User id was not found');
      }

      $sqlQuery = "SELECT * FROM users WHERE id = $user_id";
      $results = $link->query($sqlQuery);
      $rows = $results->num_rows;

      if($rows >= 1) {
        echo "I have Results!";

        // grabs the image from squel pro

        while($row = $results->fetch_assoc()) {
          echo "<center>";
          echo "<div><img src='". $row['image'] . "'></div>";
          echo $row['name'];
          echo "</center>";
        }
      } else {
        // No Rows, no results from query
        echo "No Results";
      }

    ?>
</body>
</html>