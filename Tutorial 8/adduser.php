<?php
require "dbconn.php";
$salt = '$1$kit202';

if (isset($_POST["username"]) && isset($_POST["password"])) {
  $username = $conn->real_escape_string($_POST["username"]);
  $password = $conn->real_escape_string($_POST["password"]);
  $hash_pass = crypt($password, $salt);

  // Complete this if statement

  $insertPostSQL = 
  "INSERT INTO T09_User
  (username, password) 
  VALUES 
  ('$username', '$hash_pass');"; 

  if ( $response =  $conn->query($insertPostSQL)) {
    header("location: login.php");
  } else {
    echo "<p>Database error occured</p>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Tutorial 9/10</title>
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <style>
      body {
          font-family: Arial, sans-serif;
          font-size: 13px;
      }

  </style>
</head>
<body>

<form class="login-form" method="POST" name="register-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <input type="text" id="username" name="username" placeholder="Account Name">
  <input type="password" id="pass" name="password" placeholder="Password">
  <input class="button" type="submit" value="Add to DB"></input>
</form>

</body>
</html>
