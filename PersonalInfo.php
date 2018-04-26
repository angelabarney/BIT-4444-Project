<?php
  $Student_ID = 0;
  $First_Name = "";
  $Last_Name = "";
  $Email = "";
  $Year = "";
  $Major = "";
  $err = false;

  if (isset($_POST["submit"])) {
    if(isset($_POST["Student_ID"])) $Student_ID = $_POST["Student_ID"];
    if(isset($_POST["First_Name"])) $First_Name = $_POST["First_Name"];
    if(isset($_POST["Last_Name"])) $Last_Name = $_POST["Last_Name"];
    if(isset($_POST["Email"])) $Email = $_POST["Email"];
    if(isset($_POST["Year"])) $Year = $_POST["Year"];
    if(isset($_POST["Major"])) $Major = $_POST["Major"];


//echo $Student_ID.$First_Name.$Last_Name.$Email.$Year.$Major;

    if (!empty($First_Name) && !empty($Last_Name) && !empty($Email)
    && !empty($Year) && !empty($Major) && $Student_ID >=0) {
      // && $Student_ID >=0
      //echo "here";
      header("HTTP/1.1 307 Temprary Redirect");
      header("Location: updatePersonal.php");
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
    <title>HokieMatch: Personal Information </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <script src="jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </head>
<body>
    <a href="http://www.bit.vt.edu"><img src="Hokiematchlogo.png" /></a>

      <a  href="HMStudentlogin.html" align="right">Student Log In</a>

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

<font color="maroon" size="4" ; style="font-family:impact;" </font>

<h2>Personal Information</h2>
<img src="blankprofile.png" height="150" width="150"/>
<p>Change Profile Picture</p>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<table>
<tr>
  <td>Student ID:</td>
  <td><input name="Student_ID" type="number" size="10" value="<?php echo $Student_ID; ?>"/></td>
</tr>
<tr>
  <td>First Name: </td>
  <td><input name="First_Name" type="text" size="20" value="<?php echo $First_Name; ?>"/></td>
</tr>
<tr>
  <td>Last Name: </td>
  <td><input name="Last_Name" type="text" size="20" value="<?php echo $Last_Name; ?>"/></td>
</tr>
</table>

<h2>Virginia Tech Information</h2>
<table>
  <tr>
    <td>VT email: </td>
    <td><input type="email" name="Email" size="20" value="<?php echo $Email; ?>"/></td>
  </tr>
  <tr>
    <td>Academic Year: </td>
    <td><select name="Year" value="<?php echo "<option>$Year</option>" ?>">
    <option>Freshman</option>
    <option>Sophomore</option>
    <option>Junior</option>
    <option>Senior</option>
  </select></td>
  </tr>
  <tr>
    <td>Major: </td>
    <td><select name="Major" value="<?php echo "<option>$Major</option>" ?>">
    <option>Agriculture</option>
    <option>Architecture</option>
    <option>Business</option>
    <option>Engineering</option>
    <option>Liberal Arts</option>
    <option>Natural Resources</option>
    <option>Science</option>
  </select> </td>
  </tr>
</table>
<input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>
