<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Update Roommate Preference</title>
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
  $Clean = "";
  $Bed_Time = "";
  $Car = 0;

  if(isset($_POST["Student_ID"])) $Student_ID = $_POST["Student_ID"];
  if(isset($_POST["Clean"])) $Clean = $_POST["Clean"];
  if(isset($_POST["Bed_Time"])) $Bed_Time = $_POST["Bed_Time"];
  if(isset($_POST["Car"])) $Car = $_POST["Car"];

    require_once("db.php");

    echo "<table>";
    echo "<thead>";
    echo "<th>Student ID</th><th>Clean</th><th>Bed Time</th><th>Car</th>";
    echo "</thead>";
    echo "<td>$Student_ID</td><td>$Clean</td><td>$Bed_Time</td><td>$Car</td>";

      if ($Student_ID == 0) {
      $sql = "insert into students(Clean, Bed_Time, Car)
              values('$Clean', '$Bed_Time', '$Car')";

      $result=$mydb->query($sql);

      if ($result==1) {
        echo "<p>Your preferences have been added!</p>";
      }
    } else {
      $sql = "update students set Clean='$Clean', Bed_Time='$Bed_Time', Car='$Car',
             where Student_ID=$Student_ID";

      $result=$mydb->query($sql);

      if ($result==1) {
        echo "<p>Your preferences have been updated!</p>";
      }
    }
  ?>
<a href="http://localhost/Final%20PROJ%204444/roommatePref.php">Go Back</a>

</body>
</html>
