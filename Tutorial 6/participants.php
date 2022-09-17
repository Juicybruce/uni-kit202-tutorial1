<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Tutorial 7</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php
      // Write your PHP here
      echo "<p><b>Current Participants:</b></p>";

      require "./dbconn.php";
      $sql = "SELECT id, firstName, lastName, DOB, gender FROM Participants ORDER BY id DESC;";
      if ( $response = $conn->query($sql)) {
        if ( $response && $response->num_rows > 0) {
          echo '<table>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>DOB</th>
                  </tr>';
          while ($row = $response->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["firstName"] . "</td>";
            echo "<td>" . $row["lastName"] . "</td>";
            echo "<td>" . $row["gender"] . "</td>";
            echo "<td>" . $row["DOB"] . "</td>";
            echo "</tr>";
          }
          echo "</table>";
        }
        $response->free();
      }

      $conn->close();
    ?>
  </body>
</html>
