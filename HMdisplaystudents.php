<!doctype html>
<html>
<head>
  <style type="text/css">
  .colors  {background-color:#fff0b3;color:black;vertical-align:top}

  </style>
  <title> Display: Information about a student!</title>
</head>
<body>
  <?php
  require_once("db.php");
  if(isset($_GET['Student_ID'])) $Student_ID=$_GET['Student_ID'];

  $sql = "";


    if(empty($Student_ID)){
    $sql ="SELECT student_ID, First_Name, Last_Name from students";
  else {
    $sql ="SELECT student_ID, First_Name, Last_Name  from students where Student_ID=".$id;
    }
  $result = $mydb->query($sql);




  echo "<table> id='myTable'>";
  echo "<thead class =  'colors'>";
  echo "<th>First Name</th><th>Last Name</th><th>Academic Year</th>";
  echo "</thead>";

    while($row = mysqli_fetch_array($result)) {
      echo "<tr > </tr>";
      echo "<td> ".$row["Student_ID"]."</td><td>".$row["Last_Name"]."</td><td>".$row["Year"]."</td>";

      echo "</tr>";
    }
    echo "</table>";

  ?>

  <?php
    $id = 0;
    require_once("db.php");

    if(isset($_GET['Student_ID'])) $id= $_GET['Student_ID'];
    $sql = "";

    if(empty($Student_ID)){
      $sql = "SELECT Student_ID, First_Name, Last_Name  FROM students";
    } else
    {
      $sql =  "SELECT Student_ID, First_Name, Last_Name FROM students where Student_ID =$id";
    }


    //$sql = "SELECT SupplierID, CompanyName, ContactName, ContactTitle, Address, City, Region, PostalCode, Country, Phone, Fax FROM Suppliers";
    $result = $mydb->query($sql);




  ?>


</body>
</html>
