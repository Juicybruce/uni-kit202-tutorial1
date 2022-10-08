<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Tutorial 9/10</title>
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 14px;
    }

    div {
      width: 300px;
      margin: auto;
      padding: 50px;
      text-align: center;
    }

    #authenticated {
      border: 4px solid #75b466;
    }

    #unauthenticated {
      border: 4px solid #b85f5f;
    }

    #hint {
      text-align: center;
    }
  </style>
</head>
<body>
  <!-- COMMENT OUT THE LINES BELOW FOR ACTIVITY 3 -->
  <!-- <div id="authenticated">
    <form method="POST" action="logout.php">
      <p>Logged in.</b></p>
      <button type="submit">Logout</button>
    </form>
  </div> -->
  <!-- COMMENT OUT THE LINES ABOVE FOR ACTIVITY 3 -->



  <?php
  // UNCOMMENT THE LINES BELOW FOR ACTIVITY 3
  session_start();
  if ( isset($_SESSION["userId"]) ) {
    echo '<div id="authenticated">
            <form method="POST" action="logout.php">
              <p>Logged in as: <b>' . $_SESSION["userId"] . '</b></p>
              <button type="submit">Logout</button>
            </form>
          </div>';
  }
  else {
    echo '<div id="unauthenticated">
            <p>You are not logged in.</p>
          </div>';
  }
  // UNCOMMENT THE LINES ABOVE FOR ACTIVITY 3
  ?>



  <p id="hint">Return to the <a href="login.php">login</a> page.</p>
</body>
</html>
