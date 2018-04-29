<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Update Apartment Preferences</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
  <script src="jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <style>
    table, td {
      border: 1px solid white;
    }
    table {
      border-collapse: collapse;
      empty-cells: show;
      display:
    }
    th, td:first-child{
      color: white;
      background-color: maroon;
    }
    td {
      width: 15em;
      height: 20px;
      color: black;
      background-color: white;
    }
  </style>
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
        <li role="presentation"><a href="personalinfo.html">Personal Information</a></li>
        <li role="presentation"><a href="roommatePref.html">Roommate Preferences</a></li>
        <li role="presentation"><a href="apartmentPref.html">Apartment Preferences</a></li>
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

  <?php
  $Student_ID = 0;
  $Budget = 0;
  $Location = "";
  $Bus_Stop = -1;
  $Pet = -1;
  $Bedrooms = 0;
  $Bathrooms = 0;

    if(isset($_POST["Student_ID"])) $Student_ID = $_POST["Student_ID"];
    if(isset($_POST["Budget"])) $Budget = $_POST["Budget"];
    if(isset($_POST["Location"])) $Location = $_POST["Location"];
    if(isset($_POST["Bus_Stop"])) $Bus_Stop = $_POST["Bus_Stop"];
    if(isset($_POST["Pet"])) $Pet = $_POST["Pet"];
    if(isset($_POST["Bedrooms"])) $Bedrooms = $_POST["Bedrooms"];
    if(isset($_POST["Bathrooms"])) $Bathrooms = $_POST["Bathrooms"];

    require_once("db.php");

    echo "<table>";
    echo "<thead>";
    echo "<th>Student ID</th><th>Budget</th><th>Location</th><th>Bus Stop</th>
          <th>Pet Friendly</th><th># of Bedrooms</th><th># of Bathrooms</th>";
    echo "</thead>";
    echo "<td>$Student_ID</td><td>$Budget</td><td>$Location</td><td>$Bus_Stop</td>
          <td>$Pet</td><td>$Bedrooms</td><td>$Bathrooms</td>";

      if ($Student_ID == 0) {
      $sql = "insert into students(Budget, Location,
              Bus_Stop, Pet, Bedrooms, Bathrooms)
              values('$Budget', '$Location', '$Bus_Stop',
              '$Pet', '$Bedrooms', '$Bathrooms')";

      $result=$mydb->query($sql);

      if ($result==1) {
        echo "<p>Your preferences have been added!</p>";
      }
    } else {
      $sql = "update students set Budget='$Budget', Location='$Location', Bus_Stop='$Bus_Stop',
              Pet='$Pet', Bedrooms='$Bedrooms', Bathrooms='$Bathrooms' where Student_ID=$Student_ID";

      $result=$mydb->query($sql);

      if ($result==1) {
        echo "<p>Your preferences have been updated!</p>";
      }
    }
  ?>
<a href="http://localhost/Final%20PROJ%204444/apartmentPref.php">Go Back</a>

</body>
</html>
