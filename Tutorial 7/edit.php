<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Tutorial 9</title>
</head>
<body>
  <h1>Edit Participant</h1>
  <?php

  require "./dbconn.php";

  if (!isset($_GET["id"])) {
    redirect("participants.php");
  }
  $id = $_GET["id"];

  if (empty($_POST)) {
    $row = select();
    // print_r($row);
  }
  else {
    update();
    mysqli_close($conn);
    redirect("participants.php");
  }

  function redirect($url)
  {
    header("location: $url");
    exit;
  }

  function select()
  {
    global $conn;
    global $id;

    $sql = "SELECT firstName, lastName, DOB, gender FROM Participants WHERE id='" . $id . "';";

    if ($response  = $conn->query($sql)) {
      $row = $response->fetch_assoc();
      return $row;
    } else {
      echo 'failed to fetch row';
    }
  }

  function update()
  {
    global $conn;
    global $id;

    $firstName = htmlspecialchars($_POST['fname']);
    $lastName = htmlspecialchars($_POST['lname']);
    $DOB = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);

    $sql = "UPDATE Participants
            SET firstName = '$firstName', lastName = '$lastName', DOB = '$DOB', gender = '$gender'
            WHERE id='" . $id . "';";

    if ($response  = $conn->query($sql)) {
      return;
    }
  }
  ?>

  <!-- $_SERVER["PHP_SELF"] represents the current page -->
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id=$id"); ?>">
   <table>
      <tr>
        <td class="label">First name</td>
        <td><input type="text" name="fname" id="fname" value="<?php echo $row['firstName']; ?>" required></td>
      </tr>
      <tr>
        <td class="label">Last name</td>
        <td><input type="text" name="lname" id="lname" value="<?php echo $row['lastName']; ?>" required></td>
      </tr>
      <tr>
        <td class="label">Gender</td>
        <td>
          <div><input type="radio" name="gender" value="F" <?php echo ($row['gender'] == 'F' )? 'checked="checked"' : ''; }; ?> required> Female</div>
          <div><input type="radio" name="gender" value="M" <?php if ( $row['gender'] == 'M' ) { echo 'checked="checked"'; };  ?> required> Male</div>
          <div><input type="radio" name="gender" value="O" <?php if ( $row['gender'] == 'O' ) { echo 'checked="checked"'; }; ?> required> Other</div>
        </td>
      </tr>
      <tr> 
        <td class="label">Date of birth</td>
        <td>
          <input type="date" name="dob" id="dob" value="<?php echo $row['DOB']; ?>" required>
        </td>
      </tr>
      <tr>
        <td>
          <button type="button" onclick="window.location.href='participants.php'">Cancel</button>
        </td>
        <td style="text-align: right;">
          <button type="submit">Update</button>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
