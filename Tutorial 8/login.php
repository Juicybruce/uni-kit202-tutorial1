<?php
require "dbconn.php";
session_start();
$invalid_login = false;
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $conn->real_escape_string($_POST["username"]);
    $password = $conn->real_escape_string($_POST["password"]);

    // Complete this if statement

    if ( authenticate($username, $password)) {
      $_SESSION['userId'] = $username;
      header('Location: ./protected.php');
    } else {
      $invalid_login = true;
    }
}

// Queries the DBMS with the supplied user details
// Returns true on successful authentication and false otherwise.
function authenticate($user, $pass)
{
    global $conn;

    $sql = "SELECT password FROM T09_User WHERE username='$user'"; //NOTE: password is a SQL reserved word, but I am not going to change the database schema

    if (check_username($user)) {
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
  
      if (password_verify($pass, $row['password'] )) {
        return true;
      }
    }    
  return false;
}

function check_username($user) : bool
{
    global $conn;

    $sql = "SELECT username FROM T09_User WHERE username='$user'";
    $result = $conn->query($sql);

    if ($result) {
      if (mysqli_num_rows($result) > 0) {
      return true;
    }
    else {
      return false;
    }
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
    body, button {
      font-family: Arial, sans-serif;
      font-size: 14px;
    }

    #wrapper {
      width: 300px;
      margin: auto;
      padding: 50px;
      border: 4px solid black;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      padding-top: 10px;
    }

    #hint {
      text-align: center;
    }

    .button {
      max-width: 30%;
      text-transform: uppercase;
      margin-top: 10px;
      padding: 10px;
      border: none;
      background-color: #117cc7;
    }
  </style>
</head>
<body>
  <div id="wrapper">
    <form class="login-form" name="login-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="Account Name">
      <label for="password">Password:</label>
      <input type="password" id="pass" name="password" required placeholder="Password">
      <input class="button" name="btnSubmit" type="submit" value="Sign In"></input>
    </form>
    <?php if ( $invalid_login === true ): // Add PHP code here to display an error message if the login attempt is invalid. ?>
      <div class="error-text"> Invalid Username or Password.<br>Please try again</div>
    <?php endif; ?>
  </div>
  <p id="hint">Try accessing the '<a href="protected.php">protected page</a>' when are/are not logged in.</p>
</body>
</html>
