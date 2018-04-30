<?php
$Student_ID= 0;
$err = false;

if (isset($_POST["submit"])) {
  if (isset($_POST["Student_ID"])) $Student_ID = $_POST["Student_ID"];

    if(!empty($Student_ID)) {
      header("HTTP/1.1 307 Temprary Redirect");
      header("Location: deleteprofile.php");
    } else {
      $err = true;
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
    <title>Delete Profile </title>
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
      <li role="presentation"><a href="HMHome.html">Home</a></li>
      <li role="presentation"><a href="HMHousingoptions.html">Housing Options</a></li>
      <li role="presentation"><a href="HMExampleprofile.html">Example Profile Match-Up</a></li>
    </ul>
  </li>

  <li role="presentation" class="dropdown">
  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    Personal Information <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
    <li role="presentation"><a href="personalinfo.php">Personal Information</a></li>
    <li role="presentation"><a href="roommatePref.php">Roommate Preferences</a></li>
    <li role="presentation"><a href="apartmentPref.php">Apartment Preferences</a></li>
      <li role="presentation"><a href="matchUP.html">Find Similar People!</a></li>

  </ul>
</li>

<li role="presentation" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
  Admin Login <span class="caret"></span>
</a>
<ul class="dropdown-menu">
  <li role="presentation"><a href="HMadminlogin.php">Admin Login</a></li>

</ul>
</li>

  </ul>
</nav>
<br />
<br />
</p>
<h1>Delete Student Profile</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
  <label>Enter Student ID to Delete:<br />
       <input type="number" name="Student_ID" value="<?php if(!empty($Student_ID) && $Student_ID>0) echo $Student_ID; ?>" /><br />
     </label>
     <br />

     <input type="submit" name="submit" value="Submit"  />
      <br />
</form>
</body>
</html>
