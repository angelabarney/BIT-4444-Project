<!doctype html>
<html>
<head>

  <style type="text/css">
  .colors  {background-color:#fff0b3;color:black;vertical-align:top}

  </style>
  <title> Display: Do you want or have a pet!</title>
</head>
<body>
  <?php
  $id = 0;
  if(isset($_GET['id'])) $id=$_GET['id'];

  require_once("db.php");

  $sql = "";
  if($id==0)
    $sql ="select * from students";
  else {
    $sql ="select * from students where pet=".$id;
    }
  $result = $mydb->query($sql);

  echo "<table>";
  echo "<thead class =  'colors'>";
  echo "<th>First Name</th><th>Last Name</th><th>Pet</th>";
  echo "</thead>";

    while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td>".$row["Pet"]."</td>";

      echo "</tr>";
    }

  ?>
</body>
</html>
