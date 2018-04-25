<?php

$username="";
$password="";
$remember="no";
$error = false;
$loginOK = null;

if(isset($_POST["submit"])){
  if(isset($_POST["username"])) $username=$_POST["username"];
  if(isset($_POST["password"])) $password=$_POST["password"];
  if(isset($_POST["remember"])) $remember=$_POST["remember"];

  if(empty($username) || empty($password)) {
    $error=true;
  }

  if (!$error) {
    require_once("db.php");
    $sql = "select username, password from login WHERE username='$username' and password='$password'";
    $result = $mydb->query($sql);

    $row=mysqli_fetch_array($result);

    if ($row){
      if (strcmp($username, $row["username"]) == 0 && strcmp($password, $row["password"]) == 0) {
        $loginOK = true;
      } else {
        $loginOK = false;
      }

      if($loginOK) {
        //echo "here";
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $row["password"];

        Header("Location: HMHousingoptions.html");
      } elseif (!$loginOK) {
        echo "<p>Make sure you have entered the correct information.</p>";
      }

    } else {
      echo "<p>The username does not exist.</p>";
    }
  }
}



?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HokieMatch: Student Login </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <script src="jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </head>
<body>



    <a href="HMHome.html"><img src="Hokiematchlogo.png"  HEIGHT="75" WIDTH="250" /></a>

<br />
<br />

  <a  href="HMStudentlogin.php" align="right">Student Log In</a>


<p>


<nav>
  <ul class="nav nav-pills">
    <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      Home <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li role="presentation"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">Housing Option</a></li>
      <li role="presentation"><a href="#">Example Profile Match-Up</a></li>
    </ul>
  </li>

  <li role="presentation" class="dropdown">
  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    Personal Information <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
    <li role="presentation"><a href="#">Personal Information</a></li>
    <li role="presentation"><a href="#">Roommate Preferences</a></li>
    <li role="presentation"><a href="#">Apartment Preferences</a></li>
  </ul>
</li>

<li role="presentation" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
  Admin Login <span class="caret"></span>
</a>
<ul class="dropdown-menu">
  <li role="presentation"><a href="#">Admin Login</a></li>
  <li role="presentation"><a href="#">Profile Management</a></li>
  <li role="presentation"><a href="#">Student Profiles</a></li>
  <li role="presentation"><a href="#">Apartment Editing</a></li>
  <li role="presentation"><a href="#">Apartment Renewal</a></li>
</ul>
</li>

  </ul>
</nav>
<br />
<br />
</p>
<p>
  
</p>
<font color="maroon"  style="font-family:impact;" ><h1> <center>

  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
      <label>Username:
        <input type="text" name="username" value="<?php
          if(!empty($username))
            echo $username;
        ?>"
        <p>


        </p>
      </label><br />
      <label>Password:
        <input type="text" name="password" value="<?php
          if(!empty($password))
            echo $password;
        ?>" />
        <p>

        </p>
      </label><br />
      <input type="submit" name="submit" value="Login" />
  </body>



</p>


</body>



</html>
