<?php
$login_ID = 0;
$name = "";
$username = "";
$password = "";
$err = false;

if (isset($_POST["submit"])) {
  if (isset($_POST["login_ID"])) $login_ID = $_POST["login_ID"];
  if (isset($_POST["name"])) $name = $_POST["name"];
  if (isset($_POST["username"])) $username = $_POST["username"];
  if (isset($_POST["password"])) $password = $_POST["password"];

    if(!empty($name) && !empty($username) && !empty($password)){
      header("HTTP/1.1 307 Temprary Redirect");
      header("Location: inputsuccess.php");
    } else {
      $err = true;
    }
  }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <title>New User</title>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <link href="css/bootstrap.min.css" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="stylesheet.css" />
     <script src="jquery-3.1.1.min.js"></script>
     <script src="js/bootstrap.min.js"></script>

   </head>
 <body>
     <a href="HMHome.html"><img src="Hokiematchlogo.png"  HEIGHT="75" WIDTH="250" /></a>

      <a  href="HMStudentlogin.html" align="right">Student Log In</a>

 </body>

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

     <style>
      .errlabel {color: red;}
    </style>
   </head>
   <body>
     <h1>New User</h1>
     <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
       <label>Login ID (Enter # greater than 5 for new user):<br />
      <input type="number" name="login_ID" value="<?php if(!empty($loginid) && $login_ID>0) echo $login_ID; ?>" /><br />
    </label>
    <br />



      <label>Name:
      <input type="text" name="name" value="<?php echo $name; ?>" />
      <?php
      if ($err && empty($name)) {
        echo "<label class = 'errlabel'>Error: Please enter your name</label>";
      }
       ?>
      </label>

      <br />
      <br />

      <label>Username:
      <input type="text" name="username" value="<?php echo $username; ?>" />
      <?php
      if ($err && empty($username)) {
        echo "<label class = 'errlabel'>Error: Please enter a username</label>";
      }
       ?>
       </label>
      <br />
      <br />

      <label>Password:
      <input type="text" name="password" value="<?php echo $password; ?>" />
      <?php
      if ($err && empty($password)) {
        echo "<label class = 'errlabel'>Error: Please enter a password</label>";
      }
       ?>
       </label>
      <br />
      <br />

      <input type="submit" name="submit" value="Submit"  />
      <br />
      </form>
    </body>
    </html>
