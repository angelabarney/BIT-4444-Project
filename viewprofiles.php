<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All Profiles</title>
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
        background-color: orange;
      }
      td {
        width: 15em;
        height: 20px;
        color: white;
        background-color: rgb(214, 188, 205);
      }
    </style>
  </head>
  <body>
    <?php
    require_once("db.php");

    $sql = "select * from students";
    $result = $mydb->query($sql);

    echo "<table>";
    echo "<thead>";
    echo "<th>Student ID</th><th>First Name</th><th>Last Name</th><th>Budget</th><th>Budget</th><th>Location</th><th>Pet</th><th>Clean</th><th>Email</th><th>Year</th><th>Major</th><th>Bed Time</th><th>Car</th>";
    echo "</thead>";


      while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td> ".$row["Student_ID"]."</td><td>".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td>".$row["Budget"]."</td><td>".$row["Email"]."</td><td>".$row["Pet"]."</td><td>".$row["Clean"]."</td><td>"
        .$row["Year"]."</td><td>".$row["Major"]."</td><td>".$row["Bed_Time"]."</td><td>".$row["Car"]."</td>";
        echo "</tr>";
      }
      echo "</table>"     


    ?>
  </body>
</html>
