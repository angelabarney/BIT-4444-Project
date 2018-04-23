<!doctype html>
<html>
<head>
  <title>HW6 After Login Question 2</title>
</head>
<body>
  <?php
    $timeString = "";
    $currentTime = date("a");
    if ($currentTime == "am") {
      $timeString = "morning";
    } else {
      $timeString = "afternoon";
    }

    session_start();  //must be specified to use the session array
    echo "<p>Good "."$timeString".", ".$_SESSION["companyname"]."!<br /> Please keep in mind that your
          supplier ID is ".$_SESSION["supplierID"].".</p>";
   ?>
</body>
</html>
