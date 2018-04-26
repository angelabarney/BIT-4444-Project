<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Update Personal Information</title>
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

  <?php
  $Student_ID = 0;
  $First_Name = "";
  $Last_Name = "";
  $Email = "";
  $Year = "";
  $Major = "";

    if(isset($_POST["Student_ID"])) $Student_ID = $_POST["Student_ID"];
    if(isset($_POST["First_Name"])) $First_Name = $_POST["First_Name"];
    if(isset($_POST["Last_Name"])) $Last_Name = $_POST["Last_Name"];
    if(isset($_POST["Email"])) $Email = $_POST["Email"];
    if(isset($_POST["Year"])) $Year = $_POST["Year"];
    if(isset($_POST["Major"])) $Major = $_POST["Major"];

    require_once("db.php");

    echo "<table>";
    echo "<thead>";
    echo "<th>Student ID</th><th>First Name</th><th>Last Name</th><th>Email</th>
          <th>Year</th><th>Major</th>";
    echo "</thead>";
    echo "<td>$Student_ID</td><td>$First_Name</td><td>$Last_Name</td><td>$Email</td>
          <td>$Year</td><td>$Major</td>";

      if ($Student_ID == 0) {
      $sql = "insert into students(First_Name, Last_Name, Email,
              Year, Major)
              values('$First_Name', '$Last_Name', '$Email',
              '$Year', '$Major')";

      $result=$mydb->query($sql);

      if ($result==1) {
        echo "<p>your profile has been added!</p>";
      }
    } else {
      $sql = "update students set First_Name='$First_Name', Last_Name='$Last_Name', Email='$Email',
              Year='$Year', Major='$Major' where Student_ID=$Student_ID";

      $result=$mydb->query($sql);

      if ($result==1) {
        echo "<p>Your profile has been updated!</p>";
      }
    }
  ?>
<a href="http://localhost/Final%20PROJ%204444/personalinfo.php">Go Back</a>

</body>
</html>
