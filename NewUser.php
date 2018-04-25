<?php
$name = "";
$username = "";
$password = "";
$err = false;

if (isset($_POST["submit"])) {
  if (isset($_POST["realname"])) $name = $_POST["realname"];
  if (isset($_POST["uname"])) $username = $_POST["uname"];
  if (isset($_POST["pword"])) $password = $_POST["pword"];

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
     <meta charset="utf-8">
     <title>New User</title>
     <style>
      .errlabel {color: red;}
    </style>
   </head>
   <body>
     <h1>New User</h1>
     <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
      <label>Name:</label>
      <input type="text" name="realname" value="<?php echo $name; ?>" />
      <?php
      if ($err && empty($name)) {
        echo "<label class = 'errlabel'>Error: Please enter your name</label>";
      }
       ?>
      <br />
      <br />

      <label>Username:</label>
      <input type="text" name="uname" value="<?php echo $username; ?>" />
      <?php
      if ($err && empty($username)) {
        echo "<label class = 'errlabel'>Error: Please enter a username</label>";
      }
       ?>
      <br />
      <br />

      <label>Password:</label>
      <input type="text" name="pword" value="<?php echo $password; ?>" />
      <?php
      if ($err && empty($password)) {
        echo "<label class = 'errlabel'>Error: Please enter a password</label>";
      }
       ?>
      <br />
      <br />

      <input type="submit" name="submit" value="Submit"  />
      <br />
      </form>
