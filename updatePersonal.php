<!doctype html>
<html>
<head>
  <title>Update Personal Information</title>
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
      background-color: rgb(166, 68, 12);
    }
    td {
      width: 15em;
      height: 20px;
      color: white;
      background-color: rgb(245, 211, 136);
    }
  </style>
</head>

<body>
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
    echo "<td>$Student_ID/td><td>$First_Name</td><td>$Last_Name</td><td>$Email</td>
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

</body>
</html>
