<?php
  $Student_ID = 0;
  $Budget = 0;
  $Location = "";
  $Bus_Stop = -1;
  $Pet = -1;
  $Bedrooms = 0;
  $Bathrooms = 0;
  $err = false;

  if (isset($_POST["submit"])) {
    if(isset($_POST["Student_ID"])) $Student_ID = $_POST["Student_ID"];
    if(isset($_POST["Budget"])) $Budget = $_POST["Budget"];
    if(isset($_POST["Location"])) $Location = $_POST["Location"];
    if(isset($_POST["Bus_Stop"])) $Bus_Stop = $_POST["Bus_Stop"];
    if(isset($_POST["Pet"])) $Pet = $_POST["Pet"];
    if(isset($_POST["Bedrooms"])) $Bedrooms = $_POST["Bedrooms"];
    if(isset($_POST["Bathrooms"])) $Bathrooms = $_POST["Bathrooms"];

// echo $Student_ID.$Budget.$Apartment_Location.$Bus_Stop.$Pet.$Bedrooms.$Bathrooms;

    if (!empty($Budget) && !empty($Location) && $Bus_Stop != -1
    && $Pet != -1 && !empty($Bedrooms) && !empty($Bathrooms)
    && $Budget >=0 && $Bedrooms >=0 && $Bathrooms >=0
    && $Student_ID >=0) {

      header("HTTP/1.1 307 Temprary Redirect");
      header("Location: updateApartmentPref.php");
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
    <title>HokieMatch: Apartment Preferences </title>
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

<font color="maroon" size="4" ; style="font-family:impact;" </font>

<h2>Apartment Preferences</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">

  <label>Please Enter Your Student ID:
    <input type="text" name="Student_ID" value="<?php echo $Student_ID; ?>" />
  </label><br />

  <label>Desired Budget (per month):
  <input name="Budget" type="number" size="25" value="<?php echo $Budget; ?>" />
  </label><br />

  <label>Distance from Campus:
    <select name="Location" value="<?php echo "<option>$Location</option>"; ?>">
      <option>Downtown</option>
      <option>On Campus</option>
      <option>2 miles away</option>
      <option>5 miles away</option>
    </select></label><br />

  <label>Bus Stop?
    <input name="Bus_Stop" type="radio" value="1" <?php if($Bus_Stop ==1) echo "checked";?> /><label>Yes</label>
    <input name="Bus_Stop" type="radio" value="0" <?php if($Bus_Stop ==0) echo "checked";?> /><label>No</label>
    <?php
      if ($err && $Bus_Stop == "-1") {
        echo "<label class='errlabel'>Error: Please choose an option</label>";
      }
    ?>
</label><br />

  <label>Pet Friendly?
    <input name="Pet" type="radio" value="1" <?php if($Pet ==1) echo "checked";?> /><label>Yes</label>
    <input name="Pet" type="radio" value="0" <?php if($Pet ==0) echo "checked";?> /><label>No</label>
    <?php
      if ($err && $Pet == "-1") {
        echo "<label class='errlabel'>Error: Please choose an option</label>";
      }
    ?>
    </label><br />

    <label>Number of Rooms:
    <input type="Bedrooms" min="1" max="4" step="1" value="<?php echo $Bedrooms; ?>" />
    </label><br />

    <label>Number of Bathrooms:
    <input type="number" min="1" max="4" step="1" value="<?php echo $Bathrooms; ?>" />
    </label><br />

<input type="Submit" name="submit" value="Submit" />

</form>

</body>
</html>
